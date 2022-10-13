<?php

namespace Database\Seeders\Demo;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Application;

class DemoApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::factory()
            ->count(15)
            ->create();
    }
}
