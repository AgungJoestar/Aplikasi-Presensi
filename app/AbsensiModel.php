<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiModel extends Model
{
    protected $table = 'absensi';

    protected $fillable = [
    	'id_siswa',
    	'status_hadir',
    	'pertemuanke',
    	'created_at',
    	'updated_at'
    ];

    // public function get_siswa(){
    // 	return $this->belongsTo('App\SiswaModel');
    // }
}
