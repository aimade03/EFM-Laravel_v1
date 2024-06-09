<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Activite ;
use \App\Models\Club ;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ActiviteSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
         Activite::factory(10)->create();
         Club::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
