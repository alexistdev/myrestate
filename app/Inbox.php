<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Inbox extends Model
{
    protected $table = "inbox";

    public function pengguna()
    {
        return $this->belongsTo('App\Pengguna', 'id_user', 'id_user');
    }

    public function inboxbalas()
    {
        return $this->hasMany('App\InboxBalas', 'key_token', 'key_token');
    }

    public function getJudulAttribute($judul)
    {
        return ucwords($judul);
    }

    public function getTimeAttribute($waktu)
    {
        Carbon::setLocale('id');
        // $waktuNew = Carbon::parse($waktu);
        // return $waktuNew->diffForHumans();
        $waktuku = date('d-m-Y h:i:s', $waktu);
        $waktuNew = Carbon::parse($waktuku);
        // return $waktuku;

        // $waktuNew = date('Y-m-d', strtotime($waktu));
        // return $waktuNew;
        return $waktuNew->diffForHumans();
    }
}
