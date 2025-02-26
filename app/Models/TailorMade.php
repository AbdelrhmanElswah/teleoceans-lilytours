<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TailorMade extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name','email','number','arrival_date','departure_date','comment',
        'nationality','dates_are_flexible','duration','adult','infants','child','holiday_type','transportation','style','promo'];

    public function promo(){
        return $this->belongsTo(PromoReferral::class , 'promo_id');
    }
}
