<?php

namespace App\Models\Models;

use App\Models\PropertyType;
use App\Models\Township;
use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WantToBuy extends Model
{
    use HasFactory;

    public function property_type_table()
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id', 'id');
    }

    public function township_table()
    {
        return $this->belongsTo(Township::class, 'township_id', 'id');
    }

    public function users_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
