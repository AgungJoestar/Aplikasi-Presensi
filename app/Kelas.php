<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $table = 'kelas';

    protected $fillable = [
    	'kode_kelas',
    	'nama'
    ];

    public function waliKelas()
	{
    	return $this->hasOne('App\WaliKelas', 'id_kelas', 'id');
	}

	public function siswa()
	{
    	return $this->hasOne('App\SiswaModel', 'id_kelas', 'id');
	}

    public function guru()
    {
        return $this->hasOne('App\SiswaModel', 'id_kelas', 'id');
    }
}
