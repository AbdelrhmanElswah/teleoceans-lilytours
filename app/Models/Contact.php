<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['call', 'address', 'links', 'map_location', 'number', 'email', 'footer', 'facebook', 'instagram', 'twitter', 'tripadvisor', 'youtube', 'messenger'];
}
