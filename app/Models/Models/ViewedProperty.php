<?php

namespace App\Models\Models;

use App\Models\MarketingTeam;
use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewedProperty extends Model
{
    use HasFactory;

    public function marketing_team()
    {
        return $this->belongsTo(MarketingTeam::class, 'marketing_team_id', 'id');
    }

    public function users_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
