<?php

namespace App;
use App\Surat;
use Illuminate\Database\Eloquent\Model;

class Sk_lulus extends Model
{
    protected $table = 'sk_lulus';
    protected $guarded = [];

    public function surat(){
        return $this->belongsTo(Surat::class);
    }
}
