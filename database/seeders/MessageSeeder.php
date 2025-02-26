<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
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
                'name' => $faker->word,
                'email' => $faker->email,
                'message' => $faker->text,
            ];
            \App\Models\Message::create($array);
        }
    }
}
