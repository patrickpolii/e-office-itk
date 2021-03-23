<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $guarded = [];
    
    public function jenis_surat() {
        return $this->belongsTo('App\JenisSurat', 'id_jenis_surat');
    }
    public function mahasiswa() {
        return $this->belongsTo('App\Mahasiswa', 'id_mahasiswa');
    }

    public function pejabat() {
        return $this->belongsTo('App\Pejabat', 'id_pejabat');
    }
}
