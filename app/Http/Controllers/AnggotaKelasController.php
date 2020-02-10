<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\SiswaModel;
use App\Kelas;
use DB;

class AnggotaKelasController extends Controller
{
	public function show($id)
	{
	    $siswa = DB::table('siswa')->get();
	    $kelas = DB::table('kelas')->where('id',$id)->get();
	    return $kelas;

	    return view('/admin/kelas/anggota', ['siswa' => $siswa],['kelas'=>$kelas]);
	}

	public function update(Request $request)
    {

        DB::table('siswa')->where('nis',$request->nis)->update([
        'id_kelas' => $request->id_kelas
        
        ]);


         return redirect('/kelas');
    }
}
