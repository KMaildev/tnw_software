<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Appointment extends Model
{
    use LogsActivity;
    protected static $logName = 'appointments_log';
    protected static $logAttributes = ['appointment_date_time', 'appointment_person', 'appointment_location', 'appointment_remark', 'user_id', 'marketing_team_id', 'created_at', 'updated_at'];
}
