<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = ['highlights', 'sights', 'includes', 'excludes'];
        foreach ($words as $word) {
            $array = [
                'name' => $word.' Name',
                'type' => $word,
            ];
            \App\Models\PackageContent::create($array);
        }
    }
}
