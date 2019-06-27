<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ModificationLog extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */     
    protected $table = 'modification_logs';

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
        'object',
        'before',
        'after',
        'description',
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */    
    protected $dates = ['created_at', 'deleted_at'];

    /**
     *  Save modification log
     *  
     *  @return void
     */     
	public static function saveLog($object_id, $user_id, $operation_id) {
        
        // Instance the model for get columns
        $log = new ModificationLog;

        // Save data into database
        $log->ip_address = $_SERVER['REMOTE_ADDR'];
        $log->object = $object_id;
        $log->user_id = $user_id;
        $log->operation_id = $operation_id;
        $log->save(); 
    }    

    /**
     *  Getting personal modification logs
     *  
     *  @return void
     */     
	public static function getPersonalLogs($user_id) {
        return DB::table('modification_logs')
        ->join('operations', 'operations.id', '=', 'modification_logs.operation_id')
        ->select('operations.description as operation', 'modification_logs.*')
        ->where('modification_logs.user_id', '=', $user_id)
        ->where('modification_logs.status_id', '=', 1)
        ->get();         
    }      
}
