<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accommodation extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title', 'location', 'tripadvisor_link', 'image', 'description'];

    public function programs()
    {
        return $this->belongsToMany(Program::class, 'program_accommodations');
    }
}
