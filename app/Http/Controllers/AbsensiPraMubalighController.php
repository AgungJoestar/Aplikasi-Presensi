<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbsensiSiswaSekolah;
use App\AbsensiPraMubaligh;
use App\SiswaModel;
use DB;
use PDF;

class AbsensiPraMubalighController extends Controller
{
    //
    public function index()
    {
    	$id_kelas = request('id_kelas');
        $siswa = SiswaModel::with('kelas')->where('id_kelas', $id_kelas)->get();
        // $kelas = DB::select("select * from kelas where jenis_kelas = 'Pengajian'");
        $kelas = DB::select("select * from kelas where jenis_kelas = 'Pramubaligh'");
        // $kelas = DB::select("select * from kelas where jenis_kelas = 'Pramubaligh'");

        return view('/admin/absensi/siswaPramubaligh', ['siswa' => $siswa], ['kelas' => $kelas])->with(compact('id_kelas'));
    }


  public function getUsers($id = 0){
    // Fetch all records
    $userData['data'] = AbsensiPraMubaligh::getuserData($id);

    echo json_encode($userData);
    exit;
  }

    public function store()
    {
        $siswa = new AbsensiPraMubaligh;
        $id_kelas = request('id_kelas');

        if (is_null(request('nis'))){
			\Session::flash('flash_message_fail',' Error : Tidak ada data yand dipilih.');
			return redirect()->back();
		}
		else{
        	// return request('nis');
			$counter = count(request('nis'));
			$nis = request('nis');
			// return $nis;
			date_default_timezone_set("Asia/Bangkok");
			// $tgl_absen = date("Y-m-d")." ".date("H:i:s");

			for ( $i=0; $i< $counter; $i++) {
				if (!is_null(request('absen'.$nis[$i]))){
				if (AbsensiPraMubaligh::where('tgl_absen', '=', request('tgl_absen'))->where('nis', "=",$nis[$i])->count() < 1) {
			    $siswa = new AbsensiPraMubaligh;
				$siswa->nis = $nis[$i];
				$siswa->id_kelas = request('id_kelas');
				$siswa->pertemuan = request('pertemuan');
		        $siswa->absen = request('absen'.$nis[$i]);
		        $siswa->keterangan = request('keterangan'.$nis[$i]);
		        $siswa->tgl_absen = request('tgl_absen');
		        $siswa->save();
				}
				else{
					DB::table('absensi_pramubaligh')
            			->where('tgl_absen', request('tgl_absen'))
            			->where('nis', $nis[$i])
            			->update(['absen' => request('absen'.$nis[$i]), 'keterangan' => request('keterangan'.$nis[$i])]);
				}
				}
			}   

			// $guru->id_guru = request('id_guru');
	  //       $guru->absen = request('absen');
	  //       $guru->keterangan = request('keterangan');
	  //       $guru->tgl_absen = request('tgl_absen');
	  //       $guru->save();

	        \Session::flash('flash_message','successfully saved.');

	        return redirect()->back();
		}
    }

    public function show()
    {
    	$tgl_lapor = request('tgl_lapor');
    	$id_kelas = request('id_kelas');
     	$users = DB::table('absensi_pramubaligh')
		->join('siswa', 'absensi_pramubaligh.nis', '=', 'siswa.nis')
		->join('kelas', 'kelas.id', '=', 'absensi_pramubaligh.id_kelas')
		->select('absensi_pramubaligh.*', 'siswa.nama_siswa', 'kelas.kode_kelas', 'kelas.nama')
		->get();
		$kelas = DB::select("select * from kelas where jenis_kelas = 'Pramubaligh'");
   
       return view('admin.absensi.laporanPraMubaligh',['users'=>$users], ['kelas' => $kelas])->with(compact('tgl_lapor', 'id_kelas'));
    }

        public function cetak_pdf()
    {
        $tgl_lapor = request('tgl_lapor');
     	$id_kelas_lapor = request('id_kelas');
     	// return $id_kelas_lapor;
     	$nama_kelas = request('nama_kelas');
     	$siswaSekolah = DB::table('absensi_pramubaligh')
		->join('siswa', 'absensi_pramubaligh.nis', '=', 'siswa.nis')
		->join('kelas', 'kelas.id', '=', 'absensi_pramubaligh.id_kelas')
		->select('absensi_pramubaligh.*', 'siswa.nama_siswa' , 'kelas.kode_kelas', 'kelas.nama')
		->get();

		return view('admin/absensi/laporanPraMPDF',['siswa'=>$siswaSekolah])->with(compact('tgl_lapor', 'id_kelas_lapor'));

        $gpdf = PDF::loadview('admin/absensi/laporanPraMPDF',['siswa'=>$siswaSekolah],['tgl_lapor'=>$tgl_lapor], ['id_kelas_lapor'=>$id_kelas_lapor]);
        return $gpdf->download('presensi-pramubaligh-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }
}
