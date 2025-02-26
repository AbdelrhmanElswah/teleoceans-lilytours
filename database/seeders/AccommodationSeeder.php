<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Seeder;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Facker::create();
        for ($i = 0; $i < 5; $i++) {
            $array = [
                'title' => $faker->word,
                'location' => $faker->address,
                'tripadvisor_link' => $faker->word,
                'image' => '1.1.png',
                'description' => $faker->text,
            ];
            \App\Models\Accommodation::create($array);
        }
    }
}
