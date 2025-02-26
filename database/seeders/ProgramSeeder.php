<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $faker = Facker::create();
        for ($i = 1; $i < 10; $i++) {
            $array = [
                'sub_category_id' => $faker->numberBetween(1,3),
                'name' => $faker->word,
                'price' => $faker->numberBetween(100,1000),
                'type' => $faker->word,
                'duration' => $faker->word,
                'track' =>$faker->word,
                'run_dates' => 'Every Day',
                'small_description'=>$faker->sentence,
                'price_details'=>$faker->sentence,
                'description'=>$faker->sentence,
                'image'=>'image',
            ];
            \App\Models\Program::create($array);
        }




    }
}
