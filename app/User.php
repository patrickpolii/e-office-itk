<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\E_surat\Surat;
use App\Models\E_surat\Mahasiswa;



class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

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



    public function mahasiswa(){
        return $this->hasOne('App\Models\E_surat\mahasiswa', 'id_users');
    }


    public function surat() {
        return $this->hasMany('App\Models\E_surat\Surat');
    }   

    public function surat_keluar() {
        return $this->hasMany('App\Models\E_office\Surat_keluar');
    }   

}
