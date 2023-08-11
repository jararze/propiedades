<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, fn($query, $search) => $query
            ->where('name', 'like', '%' . $search . '%')
            ->orWhere('short_description', 'like', '%' . $search . '%')
            ->orWhere('long_description', 'like', '%' . $search . '%')
            ->orWhere('city', 'like', '%' . $search . '%')
            ->orWhere('address', 'like', '%' . $search . '%')
            ->orWhere('neighborhood', 'like', '%' . $search . '%'));

        if($filters['city'] != 'Ciudad'){
            $query->when($filters['city'] ?? false, fn($query, $city) => $query
                ->where('city', $city));
        }

        if($filters['property_type'] != 'Todos'){
            $query->when($filters['property_type'] ?? false, fn($query, $property_type) => $query
                ->where('propertytype_id', $property_type));
        }



    }

    public function type()
    {
        return $this->belongsTo(PropertyType::class, 'propertytype_id', 'id');
    }

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id', 'id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function facilityby()
    {
        return $this->belongsTo(FacilityProperty::class, 'property_id', 'id');
    }


}
