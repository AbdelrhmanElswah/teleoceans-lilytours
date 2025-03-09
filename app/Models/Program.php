<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name', 'price', 'type', 'duration', 'track', 'run_dates',
        'small_description', 'price_details', 'description', 'sub_category_id','image','is_featured','is_latest'];

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function Accommodation()
    {
        return $this->belongsToMany(Accommodation::class, 'program_accommodations');
    }

    public function Addon()
    {
        return $this->belongsToMany(Addon::class, 'program_addons');
    }

    public function Itinerary()
    {
        return $this->belongsToMany(Itinerary::class, 'program_itineraries');
    }

    public function highlights()
    {
        return $this->belongsToMany(PackageContent::class, 'program_highlights');
    }

    public function sights()
    {
        return $this->belongsToMany(PackageContent::class, 'program_sights');
    }

    public function includes()
    {
        return $this->belongsToMany(PackageContent::class, 'program_includes');
    }

    public function excludes()
    {
        return $this->belongsToMany(PackageContent::class, 'program_excludes');
    }

    public function media()
    {
        return $this->hasMany(Media::class, 'program_id');
    }

}
