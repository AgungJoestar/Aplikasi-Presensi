<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\AbsensiGuru;
use PDF;

class AbsensiGuruController extends Controller
{
	// public function __construct(Guru $guru, AbsensiGuru $absensiguru)
 //    {
 //        $this->guru = $guru;
 //        $this->absensiguru = $absensiguru;
 //    }

    public function index()
    {
        $guru = DB::table('guru')->get();
        $absenguru = DB::table('absensiguru')->get();

        return view('/admin/absensi/guru', ['guru' => $guru]);
    }

    public function store()
    {
        $guru = new AbsensiGuru;

        if (is_null($guru->absen = request('nip'))){
			\Session::flash('flash_message_fail',' Error : Tidak ada data yand dipilih.');
			return redirect()->back();
		}
		else{
			$counter = count(request('nip'));

			$nip = request('nip');
			date_default_timezone_set("Asia/Bangkok");
			// $tgl_absen = date("Y-m-d")." ".date("H:i:s");

			for ( $i=0; $i< $counter; $i++) {
                if (!is_null(request('absen'.$nip[$i]))){
				if (AbsensiGuru::where('tgl_absen', '=', request('tgl_absen'))->where('nip', "=",$nip[$i])->count() < 1) {
			    $guru = new AbsensiGuru;
				$guru->nip = $nip[$i];
		        $guru->absen = request('absen'.$nip[$i]);
		        $guru->keterangan = request('keterangan'.$nip[$i]);
		        $guru->tgl_absen = request('tgl_absen');
		        $guru->save();
				}
				else{
					DB::table('absensiguru')
            			->where('tgl_absen', request('tgl_absen'))
            			->where('nip', $nip[$i])
            			->update(['absen' => request('absen'.$nip[$i]), 'keterangan' => request('keterangan'.$nip[$i])]);
				}
                }
			}   

			// $guru->id_guru = request('id_guru');
	  //       $guru->absen = request('absen');
	  //       $guru->keterangan = request('keterangan');
	  //       $guru->tgl_absen = request('tgl_absen');
	  //       $guru->save();

	        \Session::flash('flash_message','successfully saved.');

	        return redirect('/absenguru');
		}
    }

        public function show()
    {
    	$tgl_lapor = request('tgl_lapor');
     	$users = DB::table('absensiguru')
		->join('guru', 'absensiguru.nip', '=', 'guru.nip')
		->select('absensiguru.*', 'guru.nama')
		->get();
   
       return view('admin.absensi.laporanGuru',['users'=>$users])->with(compact('tgl_lapor'));
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
     	$users = DB::table('absensiguru')
		->join('guru', 'absensiguru.nip', '=', 'guru.nip')
		->select('absensiguru.*', 'guru.nama')
		->get();

        return view('admin/absensi/laporanGuruPDF',['guru'=>$users])->with(compact('tgl_lapor'));

        $gpdf = PDF::loadview('admin/absensi/laporanGuruPDF',['guru'=>$users],['tgl_lapor'=>$tgl_lapor]);
        return $gpdf->download('presensi-guru-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }
}
