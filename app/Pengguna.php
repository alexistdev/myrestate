<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';

    public function agen()
    {
        return $this->hasOne('App\Agent', 'id_user', 'id_user');
    }

    public function detailuser()
    {
        return $this->hasOne('App\DetailUserM', 'id_user', 'id_user');
    }
    public function inbox()
    {
        return $this->hasMany('App\Inbox', 'id_user', 'id_user');
    }
}
