<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AbsensiSiswaSekolah extends Model
{
 	protected $table = 'absensi_siswa_sekolah';   

  public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('siswa')->orderBy('id_kelas', 'asc')->get(); 
    }else{
      // $value=DB::table('siswa')->where('id_kelas', $id)->first();
      $value=DB::table('siswa')->where('id_kelas', $id)->get();
    }
    return $value;
  
  }
}
