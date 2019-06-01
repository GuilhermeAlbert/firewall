<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'operations';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ip_address',
        'object',
        'user_id',
        'operation_id',
        'status_id',
    ];

    protected $dates = ['created_at', 'deleted_at'];
}
