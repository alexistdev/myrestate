<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    public $timestamps = false;
    protected $table = 'rumah';
    protected $primaryKey = 'id_rumah';
    protected $fillable = [
        'nama_unit',
        'tipe',
        'harga_unit',
        'gambar',
        'id_agent',
        'id_kategori'
    ];

    public function fasilitas()
    {
        return $this->hasOne('App\Fasilitas', 'id_rumah', 'id_rumah');
    }

    public function detailrumahmodel()
    {
        return $this->hasOne('App\DetailRumahModel', 'id_rumah', 'id_rumah');
    }

    public function deskripsirumah()
    {
        return $this->hasOne('App\deskripsiRumah', 'id_rumah', 'id_rumah');
    }

    public function agen()
    {
        return $this->belongsTo('App\Agent', 'id_agent', 'id_agent');
    }

    public function getHargaUnitAttribute($harga)
    {
        return "Rp. " . number_format($harga, 0, ",", ".");
    }

    public function statistik()
    {
        return $this->hasOne('App\Statistik', 'id_rumah', 'id_rumah');
    }

    public function gambar()
    {
        return $this->hasMany('App\Gambar', 'id_rumah', 'id_rumah');
    }
}
