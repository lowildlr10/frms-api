<?php

namespace Database\Seeders\Demo;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DemoRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Developer'
        ]);

        Role::create([
            'name' => 'User'
        ]);
    }
}
