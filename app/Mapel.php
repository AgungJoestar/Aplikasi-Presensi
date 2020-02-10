<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    public $table = 'mapel';

    protected $fillable = [
    	'kode',
    	'nama'
    ];

}
