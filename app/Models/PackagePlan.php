<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePlan extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function package_list()
    {
        return $this->belongsTo(User::class, 'package_id', 'id');
    }
}
