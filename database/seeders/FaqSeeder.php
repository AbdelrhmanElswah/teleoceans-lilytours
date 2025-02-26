<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
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
                'question' => $faker->sentence.'?',
                'answer' => $faker->sentence,
            ];
            \App\Models\Faq::create($array);
        }
    }
}
