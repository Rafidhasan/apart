<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $fillable = ['city', 'state', 'road_no', 'house_no', 'status', 'area', 'beds', 'baths', 'garage', 'amount', 'balcony', 'parking', 'deck', 'property_image'];
}
