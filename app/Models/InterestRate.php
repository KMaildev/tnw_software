<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class InterestRate extends Model
{
    use LogsActivity;
    protected static $logName = 'interest_rates_log';
    protected static $logAttributes = ['title', 'created_at', 'updated_at'];
}
