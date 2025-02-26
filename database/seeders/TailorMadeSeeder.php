<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TailorMadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Facker::create();
        for ($i = 0; $i < 10; $i++) {
            $array = [
                'name' => $faker->name,
                'email' => $faker->email,
                'number' => $faker->phoneNumber,
                'arrival_date' => $faker->date,
                'departure_date' => $faker->date,
                'nationality' => $faker->country,
                'dates_are_flexible' => $faker->boolean,
                'duration' => $faker->numberBetween(1,10),
                'adult' => $faker->numberBetween(1,10),
                'infants' => $faker->numberBetween(1,10),
                'child' =>$faker->numberBetween(1,10),
                'holiday_type' => $faker->word,
                'transportation' => $faker->word,
                'style' => $faker->word,
                'cities' => $faker->word,
                'promo_id' => $faker->numberBetween(1,5),
                'comment' => $faker->sentence,
            ];
            \App\Models\TailorMade::create($array);
        }
    }
}
