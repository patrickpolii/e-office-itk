<?php

namespace App;
use App\Surat;
use Illuminate\Database\Eloquent\Model;

class Sk_lulus extends Model
{
    protected $table = 'sk_lulus';
    protected $fillable = ['id_surat', 'akreditasi_institut', 'keperluan', 'tanggal_yudisium'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
