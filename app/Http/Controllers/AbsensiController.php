<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {	
    	

	   	$data= DB::table('absensi')
    	->join('siswa as murid','absensi.id_siswa','=','murid.id_siswa')
    	->join('jns_kegiatan as jns','absensi.id_kegiatan','=','jns.id_kegiatan')
    	->join('guru as gr','absensi.id_guru','=','gr.id')
    	->join('mapel as mp','absensi.id_guru','=','mp.id_mapel')
    	->select('murid.nik as nm','murid.nama as mrd','jns.nama as jnm','absensi.status_hadir','absensi.id_kegiatan','mp.nama as mpm','gr.nama as grn')->get();

    	$filterKeyword = $request->get('keyword');

    	if($filterKeyword){
    		$data= DB::table('absensi')
    		->join('siswa as murid','absensi.id_siswa','=','murid.id_siswa')
    		->join('jns_kegiatan as jns','absensi.id_kegiatan','=','jns.id_kegiatan')
    		->join('guru as gr','absensi.id_guru','=','gr.id')
	    	->join('mapel as mp','absensi.id_guru','=','mp.id_mapel')
	    	->select('murid.nik as nm','murid.nama as mrd','jns.nama as jnm','absensi.status_hadir','absensi.id_kegiatan','mp.nama as mpm','gr.nama as grn')->where('absensi.pertemuanke', 'LIKE', "%filterKeyword%")->get();
    	}

    	// return view('admin/siswa/siswa',['absensi'=>$absensi]);
    	return view('admin/absen/siswa', compact('data'));
    	return view ('admin.absen.siswa', ['absensi=>$data']);

    	
    }
}
