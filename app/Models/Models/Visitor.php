<?php

namespace App\Models\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Visitor extends Model
{
    use HasFactory, LogsActivity;
    protected static $logName = 'visitors_log';
    protected static $logAttributes = [
        'name',
        'phone',
        'email',
        'address',
        'remark',
        'marketing_team_id',
        'user_id',
        'created_at',
        'updated_at'
    ];


    public function users_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
