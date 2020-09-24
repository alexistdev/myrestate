<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deskripsiRumah extends Model
{
    public $timestamps = false;
    protected $table = 'deskripsi';

    public function rumah()
    {
        return $this->belongsTo('App\Rumah', 'id_rumah', 'id_rumah');
    }
}
