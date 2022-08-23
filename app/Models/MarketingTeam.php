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
    protected static $logAttributes = [
        'offer_status',
        'code',
        'marketing_date',
        'no',
        'road',
        'township_id',
        'ward',
        'property_type_id',
        'floor',
        'house_style',
        'price',
        'rent_offer_contract_status',
        'deposit_amount',
        'area_width',
        'area_height',
        'area',
        'area_type',
        'bcc_status',
        'owner_status',
        'lift_status',
        'property_status',
        'extra_charge',
        'rooms',
        'shrine',
        'bathrooms',
        'dining',
        'living',
        'bedrooms',
        'master_bedrooms',
        'other_rooms',
        'permission_type',
        'grant_type',
        'orginal_or_copy',
        'owner_agent',
        'name',
        'phone',
        'email',
        'address',
        'remark',
        'photo_status',
        'user_id',
        'created_at',
        'updated_at'
    ];


    protected $fillable = [
        'offer_status',
        'code',
        'marketing_date',
        'no',
        'road',
        'township_id',
        'ward',
        'property_type_id',
        'floor',
        'house_style',
        'price',
        'rent_offer_contract_status',
        'deposit_amount',
        'area_width',
        'area_height',
        'area',
        'area_type',
        'bcc_status',
        'owner_status',
        'lift_status',
        'property_status',
        'extra_charge',
        'rooms',
        'shrine',
        'bathrooms',
        'dining',
        'living',
        'bedrooms',
        'master_bedrooms',
        'other_rooms',
        'permission_type',
        'grant_type',
        'orginal_or_copy',
        'owner_agent',
        'name',
        'phone',
        'email',
        'address',
        'remark',
        'photo_status',
        'user_id',
        'created_at',
        'updated_at'
    ];


    public function users_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function township_table()
    {
        return $this->belongsTo(Township::class, 'township_id', 'id');
    }


    public function property_type_table()
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id', 'id');
    }

    public function marketing_files_table()
    {
        return $this->hasMany(MarketingFile::class);
    }


    public function rejects_table()
    {
        return $this->belongsTo(Reject::class, 'id', 'marketing_team_id');
    }



    public function follow_ups_table()
    {
        return $this->hasMany(FollowUp::class);
    }
}
