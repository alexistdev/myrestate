<?php

namespace App\Http\Controllers;

use App\Rumah;
use App\Statistik;
use App\Agent;
use App\User;
use App\Setting;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
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
        $title = 'Detail Rumah';
        $nav = 'propertis';
        $settingProduk = Setting::all();
        //$rumahku = Rumah::with(['fasilitas', 'DetailRumahModel', 'deskripsirumah', 'agen', 'gambar'])->findOrFail($id);
        $rumahku = Rumah::with(['fasilitas', 'DetailRumahModel', 'deskripsirumah', 'agen', 'gambar'])->findOrFail($id);
        $statistik = Statistik::where('id_rumah', "=", $id)->first();
        $statistik->increment('viewer');
        $Agent = Agent::find($rumahku->agen->id_agent);
        $getDetail = $Agent->user()
            ->join('detail_user', 'detail_user.id_user', '=', 'users.id')->first();
        return view('frontend.propertidetail', compact('title', 'rumahku', 'getDetail', 'nav', 'settingProduk', 'statistik'));
    }
    // private function getDetailAgent($idAgent)
    // {
    //     $Agent = User::with(['agen', 'detailuser'])->findOrFail($idAgent);
    //     return $Agent;
    // }

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
