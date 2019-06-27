<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */ 
    protected $table = 'access_logs';

    /**
     * The primary key of table
     *
     * @var string
     */ 
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'ip_address',
        'type',
        'status',
        'user_id',
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */
    protected $dates = ['created_at', 'deleted_at'];

    /**
     *  Getting personal access logs
     *  
     *  @return void
     */
	public static function getPersonalLogs($user_id) {
        // Sending logs to return
        return AccessLog::all()->where("user_id", "=", $user_id);
    }      
}
