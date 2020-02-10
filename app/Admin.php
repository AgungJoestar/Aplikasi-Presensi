<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    // protected $table = 'admins';

    protected $fillable = [
      'name',
      'email',
      'password'
];
protected $hidden = [
     'password', 'remember_token'
];

public function setPasswordAttribute($val)
{
     return $this->attributes['password'] = bcrypt($val);
}
}