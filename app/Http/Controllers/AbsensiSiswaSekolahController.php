<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbsensiSiswaSekolah;
use App\SiswaModel;
use DB;
use PDF;

class AbsensiSiswaSekolahController extends Controller
{
    //
    public function index()
    {
    	$id_kelas = request('id_kelas');
        $siswa = SiswaModel::with('kelas')->where('id_kelas', $id_kelas)->get();
        $kelas = DB::select("select * from kelas where jenis_kelas = 'Reguler'");

        return view('/admin/absensi/siswaSekolah', ['siswa' => $siswa], ['kelas' => $kelas])->with(compact('id_kelas'));
    }


  public function getUsers($id = 0){
    // Fetch all records
    $userData['data'] = AbsensiSiswaSekolah::getuserData($id);

    echo json_encode($userData);
    exit;
  }

    public function store()
    {
        $siswa = new AbsensiSiswaSekolah;
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
			// if (AbsensiSiswaSekolah::where('nis', '=', $nis)->count() > 0)

			for ( $i=0; $i< $counter; $i++) {
				if (!is_null(request('absen'.$nis[$i]))){
				if (AbsensiSiswaSekolah::where('tgl_absen', '=', request('tgl_absen'))->where('nis', "=",$nis[$i])->count() < 1) {	
					$siswa = new AbsensiSiswaSekolah;
					$siswa->nis = $nis[$i];
					$siswa->id_kelas = request('id_kelas');
					$siswa->pertemuan = request('pertemuan');
					$siswa->absen = request('absen'.$nis[$i]);
					$siswa->keterangan = request('keterangan'.$nis[$i]);
					$siswa->tgl_absen = request('tgl_absen');
					$siswa->save();
				}
				else{
					DB::table('absensi_siswa_sekolah')
            			->where('tgl_absen', request('tgl_absen'))
            			->where('nis', $nis[$i])
            			->update(['absen' => request('absen'.$nis[$i]), 'keterangan' => request('keterangan'.$nis[$i])]);
				}
				}   
			}
	        \Session::flash('flash_message','successfully saved.');

			// $guru->id_guru = request('id_guru');
	  //       $guru->absen = request('absen');
	  //       $guru->keterangan = request('keterangan');
	  //       $guru->tgl_absen = request('tgl_absen');
	  //       $guru->save();

	        return redirect()->back();
		}
    }

    public function show()
    {
    	// $data = 0;
    	$tgl_lapor = request('tgl_lapor');
    	$id_kelas = request('id_kelas');
     	$siswaSekolah = DB::table('absensi_siswa_sekolah')
		->join('siswa', 'absensi_siswa_sekolah.nis', '=', 'siswa.nis')
		->join('kelas', 'kelas.id', '=', 'absensi_siswa_sekolah.id_kelas')
		->select('absensi_siswa_sekolah.*', 'siswa.nama_siswa' , 'kelas.kode_kelas', 'kelas.nama')
		->get();
		$kelas = DB::select("select * from kelas where jenis_kelas = 'Reguler'");
   		
   		// return $tgl_absen;
       return view('admin.absensi.laporanSiswaSekolah',['siswaSekolah'=>$siswaSekolah], ['kelas' => $kelas])->with(compact('tgl_lapor', 'id_kelas'));
    }

        public function cetak_pdf()
    {
        $tgl_lapor = request('tgl_lapor');
     	$id_kelas_lapor = request('id_kelas');
     	// return $id_kelas_lapor;
     	$nama_kelas = request('nama_kelas');
     	$siswaSekolah = DB::table('absensi_siswa_sekolah')
		->join('siswa', 'absensi_siswa_sekolah.nis', '=', 'siswa.nis')
		->join('kelas', 'kelas.id', '=', 'absensi_siswa_sekolah.id_kelas')
		->select('absensi_siswa_sekolah.*', 'siswa.nama_siswa' , 'kelas.kode_kelas', 'kelas.nama')
		->get();

		return view('admin/absensi/laporanSiswaPDF',['siswa'=>$siswaSekolah])->with(compact('tgl_lapor', 'id_kelas_lapor'));
		
        $gpdf = PDF::loadview('admin/absensi/laporanSiswaPDF',['siswa'=>$siswaSekolah],['tgl_lapor'=>$tgl_lapor], ['id_kelas_lapor'=>$id_kelas_lapor]);
        return $gpdf->download('presensi-sekolah-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }
}
