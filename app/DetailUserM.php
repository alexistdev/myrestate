<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailUserM extends Model
{
    protected $table = 'detail_user';

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
