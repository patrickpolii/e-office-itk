<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() {
        return $this->belongsTo('App\Role', 'id_roles');
    }

    public function mahasiswa(){
        return $this->hasMany('App\Mahasiswa', 'id_users');
    }

    public function unit_kerja(){
        return $this->hasMany('App\UnitKerja', 'id_users');
    }

    public function pejabat()
    {
    return $this->hasMany('App\Pejabat', 'id_users');
    }
}
