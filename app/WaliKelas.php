<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaliKelas extends Model
{
    public $table = 'walikelas';

    public function guru()
    {
        return $this->belongsTo('App\Guru', 'id_guru', 'nip');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas', 'id');
    }
}
