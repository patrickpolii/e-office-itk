<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $fillable = ['nama_prodi'];
    
    public function jurusan() {
        return $this->belongsTo('App\Jurusan', 'id_jurusan');
    }
    public function mahasiswa() {
        return $this->hasMany('App\Mahasiswa', 'id_prodi');
    }   
}
