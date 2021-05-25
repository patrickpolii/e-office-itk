<?php

namespace App;
use App\Surat;
use Illuminate\Database\Eloquent\Model;

class Sk_pernah_studi extends Model
{
    protected $table = 'sk_pernah_studi';
    protected $guarded = [];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
