<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    protected $table = 'unit_kerja';
    protected $guarded = [];

    public function users() {
        return $this->belongsTo('App\User', 'id_users');
    }
}
