<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Auteurs']);
        Role::create(['name' => 'Administrateurs']);
        Role::create(['name' => 'Super Administrateurs']);
    }
}
