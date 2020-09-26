<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kategori::create([
            'nama_kategori'  => 'APARTEMENT',
            'deskripsi_kategori' => 'Apartement di Daerah Bandarlampung',
            'status'  => 1
        ]);
        \App\Category::create([
            'nama_kategori'  => 'RUMAH',
            'deskripsi_kategori' => 'RUMAH TERJANGKAU',
            'status'  => 1
        ]);
        \App\Category::create([
            'nama_kategori'  => 'KONTRAKAN',
            'deskripsi_kategori' => 'kontrakan rumah',
            'status'  => 1
        ]);
    }
}
