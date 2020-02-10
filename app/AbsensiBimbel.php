<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AbsensiBimbel extends Model
{
    //
     	protected $table = 'absensi_bimbel';   

  public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('siswa')->orderBy('id_bimbel', 'asc')->get(); 
    }else{
      // $value=DB::table('siswa')->where('id_kelas', $id)->first();
      $value=DB::table('siswa')->where('id_bimbel', $id)->get();
    }
    return $value;
  
  }
}
