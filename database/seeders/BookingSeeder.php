<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
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
                'program_id' => $faker->numberBetween(1, 5),
                'name' => $faker->name,
                'email' => $faker->email,
                'number' => $faker->phoneNumber,
                'type' => $faker->word,
                'adult' => $faker->numberBetween(1, 5),
                'child' => $faker->numberBetween(1, 5),
                'date' => $faker->dateTimeAD,
                'message' => $faker->sentence,
            ];
            \App\Models\Booking::create($array);
        }
    }
}
