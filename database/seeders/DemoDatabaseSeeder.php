<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Demo\DemoRoleSeeder::class,
            Demo\DemoUserSeeder::class,
            Demo\DemoApplicationSeeder::class,
            Demo\DemoUserRequestSeeder::class,
            Demo\DemoRequestFeedbackSeeder::class
        ]);
    }
}
