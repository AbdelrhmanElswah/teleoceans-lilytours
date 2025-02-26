<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = ['Category 1', 'Category 2', 'Category 3'];
        foreach ($words as $word) {
            $array = [
                'name' => $word,
                'description' => $word.'Description',
                'created_by' => 1,
            ];
            \App\Models\Category::create($array);
        }
    }
}
