<?php

namespace App\Http\Controllers;

use App\Rumah;
use App\Setting;
use DB;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    protected $request;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $settingProduk = Setting::all();
    // }
    public function index()
    {
        $title = 'Properties | Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'propertis';
        $settingProduk = Setting::all();
        $rumahku = Rumah::with(['fasilitas', 'DetailRumahModel'])->paginate(6);
        return view('frontend.propertis', compact('rumahku', 'title', 'nav', 'settingProduk'));
        // return $rumahku;
    }

    public function cari(Request $request)
    {
        $title = 'Properties | Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'propertis';
        $settingProduk = Setting::all();
        $jmlKamar = $request->jmlKamar;
        $lokasi = $request->lokasi;
        // $rumahku = Rumah::with(['fasilitas', 'DetailRumahModel'])
        //     ->where('nama_unit', 'like', "%" . $cari . "%")
        //     ->paginate(9);
        // return view('frontend.propertis', compact('rumahku', 'title', 'nav', 'settingProduk'));
        return $lokasi;
    }
}
