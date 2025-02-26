<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $array = [
                'item_id' => $i,
                'file' => 'Image Name',

            ];
            \App\Models\Media::create($array);
        }
    }
}
