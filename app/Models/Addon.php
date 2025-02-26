<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addon extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title', 'price', 'description', 'image'];

    public function programs()
    {
        return $this->belongsToMany(Program::class, 'program_addons');
    }
}
