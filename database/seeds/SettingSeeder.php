<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'nama_usaha'  => 'MyRealEstate',
            'email' => 'myRealEstate@gmail.com',
            'notelp'  => '08123456789',
            'alamat' => 'Jl.Bendungan Wayngisong No.237 Blok A Gang VI',
            'logo' => 'logo.png'
        ]);
    }
}
