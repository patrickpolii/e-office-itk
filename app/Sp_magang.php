<?php

namespace App;
use App\Surat;
use Illuminate\Database\Eloquent\Model;

class Sp_magang extends Model
{
    protected $table = 'sp_magang';
    protected $fillable = ['id_surat', 'tujuan', 'dosen_pembimbing', 'tanggal_mulai', 'tanggal_selesai'];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
