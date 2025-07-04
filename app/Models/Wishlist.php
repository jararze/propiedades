<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function PropAttributes()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
    public function UserAttributes()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
