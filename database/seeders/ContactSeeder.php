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
            'call' => 'Call us (+20) 1068111441',
            'links' => 'Link One , Link Tow',
            'map_location' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d216.0590159986556!2d31.098933!3d29.952282000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4214f09be3e7a754!2sEslam%20home!5e0!3m2!1sen!2sus!4v1672668224284!5m2!1sen!2sus',
            'address' => '139 C Menes St., Hadayek Al Ahram,Al Haram, Giza',
            'number' => '(+20) 1068111441',
            'email' => 'info@lillytoursegypt.com',
            'facebook' => 'https://www.facebook.com/lillytoursegypt',
            'twitter' => 'https://www.facebook.com/lillytoursegypt',
            'instagram' => 'https://www.instagram.com/illytours.eg/',
            'tripadvisor' => 'https://www.facebook.com/lillytoursegypt',
            'messenger' => 'https://www.facebook.com/lillytoursegypt',
            'youtube' => 'https://www.facebook.com/lillytoursegypt',
            'footer' => 'Footer description',
        ];
        \App\Models\Contact::create($array);
    }
}
