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
        $query->when(isset($filters['search']), function ($query) use ($filters) {
            $search = $filters['search'];
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('short_description', 'like', '%' . $search . '%')
                    ->orWhere('long_description', 'like', '%' . $search . '%')
                    ->orWhere('city', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhere('neighborhood', 'like', '%' . $search . '%');
            });
        });

        $query->when(isset($filters['city']) && $filters['city'] != 'Ciudad', function ($query) use ($filters) {
            $query->where('city', $filters['city']);
        });

        $query->when(isset($filters['property_type']) && $filters['property_type'] != 'Todos', function ($query) use ($filters) {
            $query->where('propertytype_id', $filters['property_type']);
        });

        $query->when(isset($filters['neighborhoods']) && $filters['neighborhoods'] != 'Zona', function ($query) use ($filters) {
            $query->where('neighborhood', $filters['neighborhoods']);
        });

        $query->when(isset($filters['garage']) && $filters['garage'] != 'Garajes', function ($query) use ($filters) {
            $query->where('garage', $filters['garage']);
        });

        $query->when(isset($filters['bedrooms']) && $filters['bedrooms'] != 'Habitaciones', function ($query) use ($filters) {
            $query->where('bedrooms', $filters['bedrooms']);
        });

        $query->when(isset($filters['bathrooms']) && $filters['bathrooms'] != 'Baños', function ($query) use ($filters) {
            $query->where('bathrooms', $filters['bathrooms']);
        });
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
