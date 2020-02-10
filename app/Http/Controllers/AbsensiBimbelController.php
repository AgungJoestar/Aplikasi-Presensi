<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbsensiSiswaSekolah;
use App\SiswaModel;
use App\AbsensiBimbel;
use DB;
use PDF;

class AbsensiBimbelController extends Controller
{
        //
public function index()
    {
        $id_kelas = request('id_kelas');
        $siswa = SiswaModel::with('kelas')->where('id_kelas', $id_kelas)->get();
        $kelas = DB::select("select * from kelas where jenis_kelas = 'Bimbel'");

        return view('/admin/absensi/bimbel', ['siswa' => $siswa], ['kelas' => $kelas])->with(compact('id_kelas'));
    }


  public function getUsers($id = 0){
    // Fetch all records
    $userData['data'] = AbsensiBimbel::getuserData($id);

    echo json_encode($userData);
    exit;
  }

    public function store()
    {
        $siswa = new AbsensiBimbel;
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
				if (AbsensiBimbel::where('tgl_absen', '=', request('tgl_absen'))->where('nis', "=",$nis[$i])->count() < 1) {
			    $siswa = new AbsensiBimbel;
				$siswa->nis = $nis[$i];
				$siswa->id_kelas = request('id_kelas');
				$siswa->pertemuan = request('pertemuan');
		        $siswa->absen = request('absen'.$nis[$i]);
		        $siswa->keterangan = request('keterangan'.$nis[$i]);
		        $siswa->tgl_absen = request('tgl_absen');
		        $siswa->save();
				}
				else{
					DB::table('absensi_bimbel')
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

	        return redirect('/absenbimbel');
		}
    }

    public function show()
    {
    	$tgl_lapor = request('tgl_lapor');
    	$id_kelas = request('id_kelas');
     	$absenbimbel = DB::table('absensi_bimbel')
		->join('siswa', 'absensi_bimbel.nis', '=', 'siswa.nis')
		->join('kelas', 'kelas.id', '=', 'absensi_bimbel.id_kelas')
		->select('absensi_bimbel.*', 'siswa.nama_siswa', 'kelas.kode_kelas', 'kelas.nama')
		->get();
		$kelas = DB::select("select * from kelas where jenis_kelas = 'Bimbel'");
   

       return view('admin.absensi.LaporanBimbel',['absenbimbel'=>$absenbimbel], ['kelas' => $kelas])->with(compact('tgl_lapor', 'id_kelas'));
    }

    public function cetak_pdf()
    {
        $tgl_lapor = request('tgl_lapor');
     	$id_kelas_lapor = request('id_kelas');
     	// return $id_kelas_lapor;
     	$nama_kelas = request('nama_kelas');
     	$siswaSekolah = DB::table('absensi_bimbel')
		->join('siswa', 'absensi_bimbel.nis', '=', 'siswa.nis')
		->join('kelas', 'kelas.id', '=', 'absensi_bimbel.id_kelas')
		->select('absensi_bimbel.*', 'siswa.nama_siswa' , 'kelas.kode_kelas', 'kelas.nama')
		->get();

		return view('admin/absensi/laporanBimbelPDF',['siswa'=>$siswaSekolah])->with(compact('tgl_lapor', 'id_kelas_lapor'));

        $gpdf = PDF::loadview('admin/absensi/laporanBimbelPDF',['siswa'=>$siswaSekolah],['tgl_lapor'=>$tgl_lapor], ['id_kelas_lapor'=>$id_kelas_lapor]);
        return $gpdf->download('presensi-bimbel-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }
}
