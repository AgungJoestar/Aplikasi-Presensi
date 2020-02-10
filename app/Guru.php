<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    public $table = 'guru';
    protected $primaryKey = 'nip';

        protected $fillable = [
    	'nip',
        'id_kelas',
    	'nama',
    	'email',
    	'alamat',
    	'tempat_lahir',
    	'tgl_lahir',
    	'no_telp',
    	'tgl_masuk',
        'pend_terakhir',
        'jabatan',
        'boarding',
        'status_nikah',
        'jumlah_kel',
        'image'
    ];

    public function waliKelas()
	{
    	return $this->hasOne('App\WaliKelas', 'id_guru', 'nip');
    	// return $this->hasOne('App\UserProfile', 'profile_user_id', 'user_id');
	}

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas', 'id');
    }
}
