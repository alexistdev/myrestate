<?php

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Agent::create([
            'id_user'  => 1,
            'level' => 1,
            'detail_agen'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit dolorum aut suscipit unde ex magnam illo ipsa culpa consequatur qui. Expedita culpa, nobis inventore sint aperiam itaque numquam ipsum maxime.'
        ]);
        \App\Agent::create([
            'id_user'  => 2,
            'level' => 1,
            'detail_agen'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit dolorum aut suscipit unde ex magnam illo ipsa culpa consequatur qui. Expedita culpa, nobis inventore sint aperiam itaque numquam ipsum maxime.'
        ]);
    }
}
