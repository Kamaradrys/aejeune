<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Agents']);
        Role::create(['name' => 'Auteurs']);
        Role::create(['name' => 'Administrateurs']);
   
    }
}
