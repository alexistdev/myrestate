<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = 'gambar';
    protected $primaryKey = 'id_gambar';
    public $timestamps = false;
    public function rumah()
    {
        return $this->belongsToMany('App\Rumah', 'id_rumah', 'id_rumah');
    }
}
