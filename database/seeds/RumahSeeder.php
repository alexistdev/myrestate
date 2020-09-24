<?php

use Illuminate\Database\Seeder;

class RumahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rumah = DB::table('rumah')->insert([
            'id_kategori' => 2,
            'id_agent' => 1,
            'nama_unit' => 'Rumah idaman',
            'tipe' => '45/72',
            'harga_unit' => 250000000,
            'gambar_rumah' => 'cdf988a031b0bec.jpg',
            'status' => 1
        ]);

        $rumah = DB::table('rumah')->insert([
            'id_kategori' => 2,
            'id_agent' => 1,
            'nama_unit' => 'Rumah Idaman Sultan',
            'tipe' => '45/72',
            'harga_unit' => 950000000,
            'gambar_rumah' => '165fc1bb78a3804.jpg',
            'status' => 1
        ]);
        $rumah = DB::table('rumah')->insert([
            'id_kategori' => 2,
            'id_agent' => 3,
            'nama_unit' => 'Rumah Idaman Sultan',
            'tipe' => '45/72',
            'harga_unit' => 950000000,
            'gambar_rumah' => '707a7ef44323fd5.jpg',
            'status' => 2
        ]);
    }
}
