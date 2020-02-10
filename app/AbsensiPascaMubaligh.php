<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AbsensiPascaMubaligh extends Model
{
    //
     	protected $table = 'absensi_pascamubaligh';   

  public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('siswa')->orderBy('id_pascamubaligh', 'asc')->get(); 
    }else{
      // $value=DB::table('siswa')->where('id_pascamubaligh', $id)->first();
      $value=DB::table('siswa')->where('id_pascamubaligh', $id)->get();
    }
    return $value;
  
  }
}
