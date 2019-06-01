<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'operation';

    protected $fillable = [
        'ip_address',
        'object',
        'user_id',
        'operation_id',
        'status_id',
    ];
}
