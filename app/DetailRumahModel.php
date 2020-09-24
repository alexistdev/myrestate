<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailRumahModel extends Model
{
    public $timestamps = false;
    protected $table = 'detail_unit';

    public function rumah()
    {
        return $this->belongsTo('App\Rumah', 'id_rumah', 'id_rumah');
    }
    public function ekslusifArea()
    {
        return $this->belongsTo('App\Exclusif', 'area', 'desa');
    }
}
