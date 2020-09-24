<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InboxBalas extends Model
{
    protected $table = "inboxbalas";

    public function inbox()
    {
        return $this->belongsTo('App\inbox', 'key_token', 'key_token');
    }
}
