<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SiswaModel extends Model
{

    use Notifiable;
    public $table = 'siswa';
    protected $primaryKey = 'nis';

    protected $fillable = [
    	'nis',
        'angkatan',
    	'nama_siswa',
    	'email',
    	'no_telp',
    	'tgl_lahir',
    	'tmpt_lahir',
    	'jk_siswa',
    	'alamat_siswa',
        // 'ortu',
        // 'emailortu',
    	'created_at',
    	'updated_at'
    ];

    // public function keuangan()
    // {
    //     return $this->hasMany('App\Keuangan', 'nis','nis');
    // }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas', 'id');
    }

    // public function get_absensi(){
    // 	return $this->hasMany('App\AbsensiModel','id_siswa');
    // }
}
