<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramExclude extends Model
{
    use HasFactory;

    public function programs()
    {
        return $this->belongsToMany(Program::class, 'program_excludes');
    }
}
