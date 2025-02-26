<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageContent extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'package_contents';

    protected $fillable = ['name', 'type'];

    public function programs()
    {
        return $this->belongsToMany(Program::class, 'program_package_contents');
    }
}
