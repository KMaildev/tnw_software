<?php

namespace App\Models;

use App\Models\Models\MarketingFile;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class MarketingTeam extends Model
{
    use LogsActivity;
    protected static $logName = 'marketing_teams_log';
    protected static $logAttributes = ['marketing_date', 'ward_no', 'road', 'wide', 'permission', 'type', 'price', 'owner_or_agent_type', 'name', 'phone_no', 'code', 'remark', 'interest_rate', 'user_id', 'created_at', 'updated_at'];


    protected $fillable = [
        'marketing_date', 'no', 'ward_no', 'road', 'wide', 'area_type', 'permission', 'type', 'price', 'currency', 'owner_or_agent_type', 'name', 'phone_no', 'email', 'code', 'remark', 'interest_rate', 'township_id', 'property_type_id', 'user_id', 'reject_status', 'reject_date', 'created_at', 'updated_at'
    ];


    public function users_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function township_table()
    {
        return $this->belongsTo(Township::class, 'township_id', 'id');
    }

    public function marketing_files_table()
    {
        return $this->hasMany(MarketingFile::class);
    }


    public function follow_ups_table()
    {
        return $this->hasMany(FollowUp::class);
    }
}
