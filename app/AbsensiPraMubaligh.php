<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AbsensiPraMubaligh extends Model
{
    //
    	protected $table = 'absensi_pramubaligh';   

  public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('siswa')->orderBy('id_pramubaligh', 'asc')->get(); 
    }else{
      // $value=DB::table('siswa')->where('id_pramubaligh', $id)->first();
      $value=DB::table('siswa')->where('id_pramubaligh', $id)->get();
    }
    return $value;
  }
}
