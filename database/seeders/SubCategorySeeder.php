<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Facker::create();
        for ($i = 1; $i < 4; $i++) {
            $array = [
                'category_id' => $i,
                'name' => $faker->word,
                'description' => $faker->sentence,
                'created_by'=>1,
            ];
            \App\Models\SubCategory::create($array);
        }
    }
}
