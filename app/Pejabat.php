<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    protected $table = 'pejabat';
    protected $fillable = ['nama_pejabat'];
    
    public function surat() {
       return $this->hasMany('App\Surat', 'id_pejabat');
       }   
}
