<?php
/*
    Develop by Alexsander Hendra Wijaya
    Contact: 0856 - 0201 -3002
    Instagram: alexistdev.18
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\User;
use App\Agent;

class AgentController extends Controller
{
    public function index()
    {
        $title = 'Daftar Agent | Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'about';
        $settingProduk = Setting::all();
        $tampilAgen = User::with(['agen', 'detailuser'])->get();
        return view('frontend.agen', compact('title', 'nav', 'settingProduk', 'tampilAgen'));
        //return $tampilAgen;
    }

    public function show($id)
    {
        $title = 'Detail Agent | Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'about';
        $settingProduk = Setting::all();
        $Agent = Agent::findOrFail($id);
        $dataAgen = $Agent->user()
            ->join('detail_user', 'detail_user.id_user', '=', 'users.id')->first();
        return view('frontend.agendetail', compact('title', 'nav', 'settingProduk', 'dataAgen'));
    }
}
