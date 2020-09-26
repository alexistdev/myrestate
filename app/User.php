<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
    * Relational Eloquent
    */
    public function agen()
    {
        return $this->hasOne('App\Agent', 'id_user');
    }


    public function detailuser()
    {
        return $this->hasOne('App\DetailUserM', 'id_user', 'id');
    }

    public function inbox()
    {
        return $this->hasMany('App\Inbox', 'id_user', 'id');
    }
}
