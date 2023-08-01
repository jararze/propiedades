<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityProperty extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function facilityName()
    {
        return $this->belongsTo(Facility::class, 'facility_id', 'id');
    }
}
