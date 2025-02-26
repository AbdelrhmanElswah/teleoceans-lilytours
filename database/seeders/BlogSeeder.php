<?php

namespace Database\Seeders;

use Faker\Factory as Facker;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
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
                'description' => $faker->text,
                'image' => 'image',
            ];
            \App\Models\Blog::create($array);
        }
    }
}
