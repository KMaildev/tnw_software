<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reject extends Model
{
    public function users_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function marketing_teams_table()
    {
        return $this->belongsTo(MarketingTeam::class, 'marketing_team_id', 'id');
    }
}
