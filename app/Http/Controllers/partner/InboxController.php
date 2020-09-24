<?php
/*
    Develop by Alexsander Hendra Wijaya
    Contact: 0856 - 0201 -3002
    Email : alexistdev@gmail.com
    Instagram: alexistdev.18
*/

namespace App\Http\Controllers\partner;

use App\Pengguna;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idPengguna = '1';
        $title = 'Inbox | Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'inbox';
        $waktuSekarang = Carbon::now();
        $pengguna = Pengguna::find($idPengguna);
        $pesan = $pengguna->inbox()
            ->get();
        return view('partner.inbox', compact('title', 'nav', 'pesan'));
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
