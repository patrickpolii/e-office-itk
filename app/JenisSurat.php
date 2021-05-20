<?php

namespace App;

use App\Surat;
use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
    protected $table = 'jenis_surat';
    protected $guarded = [];
    
    public function surat() {
       return $this->hasMany('App\Surat');
       }   
}
