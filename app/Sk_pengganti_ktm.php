<?php

namespace App;
use App\Surat;
use Illuminate\Database\Eloquent\Model;

class Sk_pengganti_ktm extends Model
{
    protected $table = 'sk_pengganti_ktm';
    protected $guarded = [];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
