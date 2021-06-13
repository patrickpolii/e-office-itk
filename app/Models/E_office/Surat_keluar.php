<?php

namespace App\Models\E_office;
use App\User;;

use Illuminate\Database\Eloquent\Model;

class Surat_keluar extends Model
{
    protected $table = 'surat_keluar';
    protected $fillable = ['no_tata_naskah', 'keperluan_tata_naskah', 'jenis_tata_naskah', 'id_users', 'status_tata_naskah', 'pejabat_penandatangan', 'tata_naskah_file', 'tata_naskah_ck', 'keterangan_tata_naskah' ];

    public function users() {
        return $this->belongsTo('App\User', 'id_users');
    }
}
