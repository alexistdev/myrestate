<?php
/*
    Develop by Alexsander Hendra Wijaya
    Contact: 0856 - 0201 -3002
    Email : alexistdev@gmail.com
    Instagram: alexistdev.18
*/

namespace App\Http\Controllers\partner;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Agent;
use App\Setting;
use App\Rumah;
use App\Gambar;
use App\Statistik;
use App\Http\Requests\RumahRequest;
use App\User;
use Auth;

class UnitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //otentikasi
        $idUser = Auth::id();
        $idAgent = User::with('agen')->find($idUser)
            ->agen->id_agent;

        $title = 'Unit Rumah | Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'unit';
        $agent = Agent::find($idAgent);
        $unitRumah = $agent->rumah()
            ->join('fasilitas_unit', 'fasilitas_unit.id_rumah', '=', 'rumah.id_rumah')
            ->join('detail_unit', 'detail_unit.id_rumah', '=', 'rumah.id_rumah')
            ->get()->sortByDesc('id_rumah');
        return view('partner.unit', compact('title', 'nav', 'unitRumah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idAgent = 1;
        $title = 'Unit Rumah | Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'unit';
        return view('partner.tambahUnit', compact('title', 'nav'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RumahRequest $request)
    {
        $rumah = new \App\Rumah;
        if ($request->hasFile('gambar1')) {
            $foto = $request->file('gambar1');
            $ext = $foto->getClientOriginalExtension();
            $getRandom = substr(sha1(time() + rand()), 25);
            if ($request->file('gambar1')->isValid()) {
                $foto_name =  "$getRandom" . ".$ext";
                $upload_path = 'storage/rumah';
                $request->file('gambar1')->move($upload_path, $foto_name);
                $rumah->gambar_rumah = $foto_name;
            };
        };

        $idUser = Auth::id();
        $idAgent = User::with('agen')->find($idUser)
            ->agen->id_agent;

        //memasukkan ke dalam table rumah
        $rumah->id_kategori = 2;
        $rumah->id_agent = $idAgent;
        $rumah->nama_unit = $request->namaUnit;
        $rumah->tipe = $request->tipe;
        $rumah->harga_unit = $request->hargaUnit;
        $rumah->status = 1;
        $rumah->save();
        $idRumah = $rumah->id_rumah;
        //detail unit 
        $detailUnit = new \App\DetailRumahModel;
        $detailUnit->id_rumah =  $idRumah;
        $detailUnit->alamat_lengkap = $request->alamatLengkap;
        $detailUnit->desa = $request->desa;
        $detailUnit->kecamatan = $request->kecamatan;
        $detailUnit->kabupaten = $request->kabupaten;
        $detailUnit->provinsi = $request->provinsi;
        $detailUnit->save();
        //fasilitas
        $fasilitas = new \App\Fasilitas;
        $fasilitas->id_rumah = $idRumah;
        $fasilitas->kamar = $request->kamar;
        $fasilitas->kamar_mandi = $request->kamarMandi;
        $fasilitas->garasi = $request->garasi;
        $fasilitas->ac = $request->ac;
        $fasilitas->pemanas_air = $request->pemanas;
        $fasilitas->laundry = $request->laundry;
        $fasilitas->gym = $request->gym;
        $fasilitas->internet = $request->internet;
        $fasilitas->tv_kabel = $request->tvKabel;
        $fasilitas->layanan_sampah = $request->layananSampah;
        $fasilitas->save();
        //deskripsi
        $deskripsi = new \App\deskripsiRumah;
        $deskripsi->id_rumah = $idRumah;
        $deskripsi->judul = $request->judul;
        $deskripsi->deskripsi = $request->deskripsiLengkap;
        $deskripsi->save();
        //Statistik
        $statistik = new \App\Statistik;
        $statistik->id_rumah = $idRumah;
        $statistik->viewer = 0;
        $statistik->save();
        //gambar
        $dataGambar = array();
        //$dataGambar[] = ['id_rumah' => $idRumah, 'gambar_unit' => '4096'];
        if ($request->hasFile('gambar2')) {
            $foto = $request->file('gambar2');
            $ext = $foto->getClientOriginalExtension();
            $getRandom = substr(sha1(time() + rand()), 25);
            if ($request->file('gambar2')->isValid()) {
                $foto_name =  "$getRandom" . ".$ext";
                $upload_path = 'storage/rumah';
                $request->file('gambar2')->move($upload_path, $foto_name);
                array_push($dataGambar, ['id_rumah' => $idRumah, 'gambar_unit' => $foto_name]);
            };
        };
        if ($request->hasFile('gambar3')) {
            $foto = $request->file('gambar3');
            $ext = $foto->getClientOriginalExtension();
            $getRandom = substr(sha1(time() + rand()), 25);
            if ($request->file('gambar3')->isValid()) {
                $foto_name =  "$getRandom" . ".$ext";
                $upload_path = 'storage/rumah';
                $request->file('gambar3')->move($upload_path, $foto_name);
                array_push($dataGambar, ['id_rumah' => $idRumah, 'gambar_unit' => $foto_name]);
            };
        };
        if ($request->hasFile('gambar4')) {
            $foto = $request->file('gambar4');
            $ext = $foto->getClientOriginalExtension();
            $getRandom = substr(sha1(time() + rand()), 25);
            if ($request->file('gambar4')->isValid()) {
                $foto_name =  "$getRandom" . ".$ext";
                $upload_path = 'storage/rumah';
                $request->file('gambar4')->move($upload_path, $foto_name);
                array_push($dataGambar, ['id_rumah' => $idRumah, 'gambar_unit' => $foto_name]);
            };
        };
        if ($request->hasFile('gambar5')) {
            $foto = $request->file('gambar5');
            $ext = $foto->getClientOriginalExtension();
            $getRandom = substr(sha1(time() + rand()), 25);
            if ($request->file('gambar5')->isValid()) {
                $foto_name =  "$getRandom" . ".$ext";
                $upload_path = 'storage/rumah';
                $request->file('gambar5')->move($upload_path, $foto_name);
                array_push($dataGambar, ['id_rumah' => $idRumah, 'gambar_unit' => $foto_name]);
            };
        };
        Gambar::insert($dataGambar);
        return redirect('unit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idUser = Auth::id();
        $idAgent = User::with('agen')->find($idUser)
            ->agen->id_agent;
        $title = 'Unit Rumah | Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'unit';
        $rumahku = Rumah::with(['fasilitas', 'DetailRumahModel', 'deskripsirumah', 'agen', 'gambar'])
            ->where('id_agent', "=", $idAgent)
            ->findOrFail($id);
        $statistik = Statistik::where('id_rumah', "=", $id)->first();
        return view('partner.detailunit', compact('title', 'nav', 'rumahku', 'statistik'));
    }

    public function hapusGambar(Request $request)
    {
        $gambar = Gambar::find($request->id);
        Storage::delete('rumah/' . $gambar->gambar_unit);
        $gambar->delete();
    }

    public function uploadGambar(Request $request)
    {
        $dataGambar = new \App\Gambar;
        if ($request->hasFile('gambarku')) {
            $foto = $request->file('gambarku');
            $ext = $foto->getClientOriginalExtension();
            $getRandom = substr(sha1(time() + rand()), 25);
            if ($request->file('gambarku')->isValid()) {
                $foto_name =  "$getRandom" . ".$ext";
                $upload_path = 'storage/rumah';
                $request->file('gambarku')->move($upload_path, $foto_name);
                $dataGambar->id_rumah = '1';
                $dataGambar->gambar_unit = '1';
                $dataGambar->save();
                //array_push($dataGambar, ['id_rumah' => $idRumah, 'gambar_unit' => $foto_name]);
            };
        };



        // $foto = $request->file('gambarku');
        // $ext = $foto->getClientOriginalExtension();
        // $getRandom = substr(sha1(time() + rand()), 25);
        // $foto_name =  "$getRandom" . ".$ext";
        // $gambarModel = new \App\Gambar;
        // $gambarModel->id_rumah = $request->id_rumah;
        // $gambarModel->gambar_unit = $foto_name;
        // $gambarModel->save();
    }

    public function testing()
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Unit Rumah | Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $rumahku = Rumah::with(['fasilitas', 'detailrumahmodel', 'deskripsirumah',  'gambar'])->findOrFail($id);
        $nav = 'unit';
        return view('partner.editUnit', compact('title', 'nav', 'rumahku'));
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
        // if ($request->hasFile('gambar')) {
        //     $file[] = $request->file('gambar');
        //     echo $file[0];
        // } else {
        //     echo "ga ada gambar";
        // }
        // $files = $request->file('gambarku');
        // foreach ($files as $file) {

        //     $filename = $file->getClientOriginalName();

        //     echo $filename;
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumah = Rumah::with(['fasilitas', 'DetailRumahModel', 'statistik', 'deskripsiRumah', 'gambar'])->findOrFail($id);
        //menghapus gambar rumah
        Storage::delete('rumah/' . $rumah->gambar_rumah);
        //mengahapus gambar thumbnail rumah
        $rumahku = json_decode($rumah->gambar, true);
        foreach ($rumahku as $rows) {
            Storage::delete('rumah/' . $rows['gambar_unit']);
        }
        //delete database
        $rumah->fasilitas()->delete();
        $rumah->detailrumahmodel()->delete();
        $rumah->deskripsirumah()->delete();
        $rumah->statistik()->delete();
        $rumah->gambar()->delete();
        $rumah->delete();
        return redirect('unit');
    }
}
