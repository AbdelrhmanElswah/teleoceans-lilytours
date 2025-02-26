<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'number', 'type', 'email', 'date', 'adult', 'child', 'message', 'program_id'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
