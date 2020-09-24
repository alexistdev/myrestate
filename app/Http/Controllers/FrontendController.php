<?php

namespace App\Http\Controllers;

use App\Exclusif;
use App\Rumah;
use App\Setting;
use App\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'home';
        $jumlah = Rumah::all()->count();
        $settingProduk = Setting::all();
        $rumahku = Rumah::with(['fasilitas', 'DetailRumahModel'])
            ->get()
            ->sortByDesc('id_rumah')
            ->take(6);
        $ourAgen = User::with(['agen', 'detailuser'])->get();
        $ekslusif = Exclusif::with('detailrumah')->get();
        return view('frontend.home', compact('title', 'rumahku', 'jumlah', 'nav', 'settingProduk', 'ourAgen', 'ekslusif'));
        //return $ourAgen;
    }

    /**
     * Show the form for creating a new res ource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
