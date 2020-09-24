<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    public $timestamps = false;
    protected $table = 'fasilitas_unit';
    protected $primaryKey = 'id_fasilitas';

    public function rumah()

    {
        return $this->belongsTo('App\Rumah', 'id_rumah', 'id_rumah');
    }
}
