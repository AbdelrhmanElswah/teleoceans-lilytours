<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'call' => 'Call us (+20) 1111130723',
            'links' => 'Link One , Link Tow',
            'map_location' => 'https://www.google.com/maps?daddr=29.9808410,31.1436830&saddr=30.0089421,31.3128896&dirflg=d&geocode=FW7myQEd-svdAQ%3D%3D;Fal4yQEdAzfbAQ%3D%3D&lucs=,94242484,94224825,94227247,94227248,47071704,47069508,94218641,94203019,47084304,94208458,94208447&g_ep=CAISDTYuMTQwLjAuOTEzNzAYACC6twsqYyw5NDI0MjQ4NCw5NDIyNDgyNSw5NDIyNzI0Nyw5NDIyNzI0OCw0NzA3MTcwNCw0NzA2OTUwOCw5NDIxODY0MSw5NDIwMzAxOSw0NzA4NDMwNCw5NDIwODQ1OCw5NDIwODQ0N0ICRUc%3D&g_st=iw',
            'address' => '139 C Menes St., Hadayek Al Ahram,Al Haram, Giza',
            'number' => '(+20) 1111130723',
            'email' => 'Info@lillytour.com',
            'facebook' => 'https://www.facebook.com/profile.php?id=100088834734536&sk=about',
            'twitter' => 'https://x.com/LillyTour',
            'instagram' => 'https://www.instagram.com/lillytours.egypt/profilecard/?igsh=MTJ1ejVoMG9xYmJ5',
            'tripadvisor' => 'https://www.facebook.com/lillytoursegypt',
            'messenger' => 'https://www.facebook.com/lillytoursegypt',
            'youtube' => 'https://www.youtube.com/@LillyTour',
            'footer' => 'Footer description',
        ];
        \App\Models\Contact::create($array);
    }
}