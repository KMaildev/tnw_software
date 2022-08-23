<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    public function region_table()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
}
