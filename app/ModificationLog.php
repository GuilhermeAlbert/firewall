<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ModificationLog extends Model
{
    protected $table = 'modification_logs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ip_address',
        'type',
        'object',
        'before',
        'after',
        'description',
    ];

    protected $dates = ['created_at', 'deleted_at'];

	public static function saveLog($object_id, $user_id, $operation_id) {
        $log = new ModificationLog;

        $log->ip_address = $_SERVER['REMOTE_ADDR'];
        $log->object = $object_id;
        $log->user_id = $user_id;
        $log->operation_id = $operation_id;
        $log->save(); 
    }    

	public static function getPersonalLogs($user_id) {
        return DB::table('modification_logs')
        ->join('operations', 'operations.id', '=', 'modification_logs.operation_id')
        ->select('operations.description as operation', 'modification_logs.*')
        ->where('modification_logs.user_id', '=', $user_id)
        ->where('modification_logs.status_id', '=', 1)
        ->get();         
    }      
}
