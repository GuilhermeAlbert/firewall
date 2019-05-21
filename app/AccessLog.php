<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    protected $table = 'access_logs';

    protected $fillable = [
        'ip_address',
        'type',
        'status',
        'user_id',
    ];
}
