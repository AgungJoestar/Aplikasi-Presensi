<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbsensiPesantren;
use App\SiswaModel;
use DB;

class AbsensiPesantrenController extends Controller
{
    //
    public function index()
    {
        $siswa = SiswaModel::with('kelas')->get();
        $kelas = DB::select("select * from kelas where jenis_kelas = 'Pesantren'");/**/

        return view('/admin/absensi/pesantren', ['siswa' => $siswa], ['kelas' => $kelas]);
    }


  public function getUsers($id = 0){
    // Fetch all records
    $userData['data'] = AbsensiPesantren::getuserData($id);

    echo json_encode($userData);
    exit;
  }

    public function store()
    {
        $siswa = new AbsensiPesantren;

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
			    $siswa = new AbsensiPesantren;
				$siswa->nis = $nis[$i];
				$siswa->id_kelas = request('id_kelas');
				$siswa->pertemuan = request('pertemuan');
		        $siswa->absen = request('absen');
		        $siswa->keterangan = request('keterangan');
		        $siswa->tgl_absen = request('tgl_absen');
		        $siswa->save();
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
}
