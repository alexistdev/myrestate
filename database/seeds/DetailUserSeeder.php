<?php

use Illuminate\Database\Seeder;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\DetailUserM::create([
            'nama_lengkap'  => 'Alexsander Hendra Wijaya',
            'notelp' => '085602013002',
            'alamat'  => 'Jl.Bendungan Wayngison 237 , Sidodadi',
            'desa' => 'sidodadi',
            'kecamatan' => 'pagelaran',
            'kabupaten' => 'pringsewu',
            'provinsi' => 'Bandar Lampung',
            'gambar' => 'default.png',
            'id_user' => 1
        ]);
        \App\DetailUserM::create([
            'nama_lengkap'  => 'Samantha Wijaya',
            'notelp' => '085602013002',
            'alamat'  => 'Jl.Bendungan Wayngison 237 , Sidodadi',
            'desa' => 'sidodadi',
            'kecamatan' => 'pagelaran',
            'kabupaten' => 'pringsewu',
            'provinsi' => 'Bandar Lampung',
            'gambar' => 'default.png',
            'id_user' => 2
        ]);
    }
}
