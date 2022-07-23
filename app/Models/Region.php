<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function townships_table()
    {
        return $this->hasMany(Township::class);
    }
}
