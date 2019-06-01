<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
