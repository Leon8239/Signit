<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\VisitorSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            VisitorSeeder::class
        ]);
        $this->call([
            UserSeeder::class
        ]);
    }
}
