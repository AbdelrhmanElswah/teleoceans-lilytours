<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Seeder;

class ItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Facker::create();
        for ($i = 0; $i < 20; $i++) {
            $array = [
                'title' => $faker->word,
                'description' => $faker->text,
            ];
            \App\Models\Itinerary::create($array);
        }
    }
}
