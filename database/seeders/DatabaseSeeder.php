<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            PackageContentSeeder::class,
            ItinerarySeeder::class,
            AccommodationSeeder::class,
            AddonsSeeder::class,
            ProgramSeeder::class,
            MessageSeeder::class,
            FaqSeeder::class,
            BlogSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
