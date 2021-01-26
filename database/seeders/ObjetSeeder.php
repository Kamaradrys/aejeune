<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ObjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Objet::create(['name' => 'Info']);
        Objet::create(['name' => 'Visite']);
        Objet::create(['name' => 'Demande']);
    }
}
