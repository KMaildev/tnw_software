<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class FollowUp extends Model
{
    use LogsActivity;
    protected static $logName = 'follow_ups_log';
    protected static $logAttributes = ['date_time', 'follow_up_type', 'follow_up_remark', 'additional_note', 'user_id', 'marketing_team_id', 'created_at', 'updated_at'];
}
