<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    public $timestamps = false;
    protected $table = 'statistik';
    protected $primaryKey = 'id_statistik';

    public function rumah()
    {
        return $this->belongsTo('App\Rumah', 'id_rumah', 'id_rumah');
    }
}
