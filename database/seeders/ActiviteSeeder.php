<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('activites')->insert([
            'description' => $faker->sentence,
            'date_debut' => $faker->date,
            'nombreJour' => $faker->numberBetween(1, 30),
        ]);
    }
}
