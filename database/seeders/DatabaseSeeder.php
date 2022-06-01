<?php

namespace Database\Seeders;

use Customers\Database\Seeders\CustomerSeeder;
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
        $this->call(CustomerSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
