<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public $incrementing = true;

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
