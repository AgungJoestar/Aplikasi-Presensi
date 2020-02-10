<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\AbsenStaf;
use PDF;

class AbsenStafController extends Controller
{
	// public function __construct(Guru $guru, AbsensiGuru $absensiguru)
 //    {
 //        $this->guru = $guru;
 //        $this->absensiguru = $absensiguru;
 //    }

    public function index()
    {
        $staf = DB::table('staf')->get();
        $absenstaf= DB::table('absenstaf')->get();

        return view('/admin/absensi/staf', ['staf' => $staf]);
    }

    public function store()
    {
        $staf = new AbsenStaf;


        if (is_null($staf->absen_staf = request('nip_staf'))){
			\Session::flash('flash_message_fail',' Error : Tidak ada data yand dipilih.');
			return redirect()->back();
		}
		else{
			$counter = count(request('nip_staf'));

			$nip_staf = request('nip_staf');
			date_default_timezone_set("Asia/Bangkok");
			// $tgl_absen_staf = date("Y-m-d")." ".date("H:i:s");

			for ( $i=0; $i< $counter; $i++) {
                // $test = request('absen_staf'.$nip_staf[$i]);
                // return $test;
                if (!is_null(request('absen_staf'.$nip_staf[$i]))){
				if (AbsenStaf::where('tgl_absen_staf', '=', request('tgl_absen'))->where('nip_staf', "=",$nip_staf[$i])->count() < 1) {
			    $staf = new AbsenStaf;
				$staf->nip_staf = $nip_staf[$i];
		        $staf->absen_staf = request('absen_staf'.$nip_staf[$i]);
		        $staf->keterangan_staf = request('keterangan_staf'.$nip_staf[$i]);
		        $staf->tgl_absen_staf = request('tgl_absen_staf');
		        $staf->save();
				}
				else{
					DB::table('absenstaf')
            			->where('tgl_absen_staf', request('tgl_absen'))
            			->where('nip_staf', $nip_staf[$i])
            			->update(['absen_staf' => request('absen_staf'.$nip_staf[$i]), 'keterangan_staf' => request('keterangan_staf'.$nip_staf[$i])]);
				}
                }
			}   

			// $guru->id_guru = request('id_guru');
	  //       $guru->absen = request('absen');
	  //       $guru->keterangan = request('keterangan');
	  //       $guru->tgl_absen = request('tgl_absen');
	  //       $guru->save();

	        \Session::flash('flash_message','successfully saved.');

	        return redirect('/absenstaf');
		}
    }

        public function show()
    {
    	$tgl_lapor = request('tgl_lapor');
     	$users = DB::table('absenstaf')
		->join('staf', 'absenstaf.nip_staf', '=', 'staf.nip_staf')
		->select('absenstaf.*', 'staf.nama_staf')
		->get();
   
       return view('admin.absensi.laporanStaf',['users'=>$users])->with(compact('tgl_lapor'));
    }

    public function cetak_pdf()
    {
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isReguler')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        $tgl_lapor = request('tgl_lapor');
        // $tgl_lapor = "Test";
     	$users = DB::table('absenstaf')
		->join('staf', 'absenstaf.nip_staf', '=', 'staf.nip_staf')
		->select('absenstaf.*', 'staf.nama_staf')
		->get();

        return view('admin/absensi/laporanGuruPDF',['staf'=>$users])->with(compact('tgl_lapor'));

        $gpdf = PDF::loadview('admin/absensi/laporanStafPDF',['staf'=>$users],['tgl_lapor'=>$tgl_lapor]);
        return $gpdf->download('presensi-staff-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }

}
