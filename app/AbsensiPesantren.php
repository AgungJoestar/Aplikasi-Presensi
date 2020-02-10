<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AbsensiPesantren extends Model
{
    //
    	protected $table = 'absensi_pesantren';   

  public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('siswa')->orderBy('id_pesantren', 'asc')->get(); 
    }else{
      // $value=DB::table('siswa')->where('id_pesantren', $id)->first();
      $value=DB::table('siswa')->where('id_pesantren', $id)->get();
    }
    return $value;
  }
}
