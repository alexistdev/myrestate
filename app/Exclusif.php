<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exclusif extends Model
{
    protected $table = 'ekslusif';
    public function detailrumah()
    {
        return $this->hasMany('App\DetailRumahModel', 'desa', 'area');
    }
}
