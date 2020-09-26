<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AgentSeeder::class);
        $this->call(DetailUserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(KategoriSeeder::class);
    }
}
