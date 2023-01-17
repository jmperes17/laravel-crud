<?php

namespace Database\Seeders;
use App\Models\Estoque;

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
        //\App\Models\Estoque::factory(10)->create();
        \App\Models\User::factory(5)->create();
    }
}
