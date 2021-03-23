<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama_mahasiswa', 'nim',];
 
    public function prodi() {
        return $this->belongsTo('App\Prodi', 'id_prodi');
    }

    public function users() {
        return $this->belongsTo('App\User', 'id_users');
    }

    public function surat() {
        return $this->hasMany('App\Surat', 'id_mahasiswa');
    }   
}