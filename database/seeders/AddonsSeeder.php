<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Seeder;

class AddonsSeeder extends Seeder
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
                'title' => $faker->word,
                'price' => $faker->numberBetween(100, 1000),
                'image' => '1.1.png',
                'description' => $faker->text,
            ];
            \App\Models\Addon::create($array);
        }
    }
}
