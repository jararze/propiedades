<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public function properties()
//    {
//        return $this->belongsToMany(Property::class, 'properties', 'amenities_id', 'id');
//    }
}
