<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class MarketingTeam extends Model
{
    use LogsActivity;
    protected static $logName = 'marketing_teams_log';
    protected static $logAttributes = ['marketing_date', 'ward_no', 'road', 'wide', 'permission', 'type', 'price', 'owner_or_agent_type', 'name', 'phone_no', 'code', 'remark', 'interest_rate', 'user_id', 'created_at', 'updated_at'];

    public function users_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function township_table()
    {
        return $this->belongsTo(Township::class, 'township_id', 'id');
    }
}
