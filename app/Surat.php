<?php

namespace App;
use App\User;
use App\Mahasiswa;
use App\Sk_aktif_organisasi;
use App\Sk_aktif_studi;
use App\Sk_lulus;
use App\Sk_pengganti_ktm;
use App\Sk_pernah_studi;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $fillable = ['no_surat', 'nama_surat', 'id_users', 'status_surat' ];
    
    public function sk_aktif_organisasi(){
        return $this->hasOne(Sk_aktif_organisasi::class, 'id_surat');
    }
    public function sk_aktif_studi(){
        return $this->hasOne(Sk_aktif_studi::class, 'id_surat');
    }
    public function sk_lulus(){
        return $this->hasOne(Sk_lulus::class, 'id_surat');
    }
    public function sk_pengganti_ktm(){
        return $this->hasOne(Sk_pengganti_ktm::class, 'id_surat');
    }
    public function sk_pernah_studi(){
        return $this->hasOne(Sk_pernah_studi::class, 'id_surat');
    }

    public function users() {
        return $this->belongsTo('App\User', 'id_users');
    }



   
}
