<?php

namespace Database\Seeders;

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
        $this->call([
            A1Seeder::class,
            A2Seeder::class,
            B1Seeder::class,
            B2Seeder::class
        ]);
    }
}
