<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class FollowUp extends Model
{
    use LogsActivity;
    protected static $logName = 'follow_ups_log';
    protected static $logAttributes = ['date_time', 'follow_up_type', 'follow_up_remark', 'additional_note', 'user_id', 'marketing_team_id', 'created_at', 'updated_at'];

    public function marketing_teams_table()
    {
        return $this->belongsTo(MarketingTeam::class, 'marketing_team_id', 'id');
    }

    public function follow_up_user()
    {
        return $this->belongsTo(User::class, 'follow_up_user_id', 'id');
    }
}
