<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    protected $table = 'access_logs';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'ip_address',
        'type',
        'status',
        'user_id',
    ];

    protected $dates = ['created_at', 'deleted_at'];

	public static function getPersonalLogs($user_id) {
        return AccessLog::all()->where("user_id", "=", $user_id);
    }      
}
