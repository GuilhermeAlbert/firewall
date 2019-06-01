<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $primaryKey = 'id';

    protected $fillable = [
        'description',
    ];

    protected $dates = ['created_at', 'deleted_at'];
}
