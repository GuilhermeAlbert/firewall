<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLevel extends Model
{
    protected $table = 'access_levels';

    protected $primaryKey = 'id';

    protected $fillable = [
        'description',
    ];

    protected $dates = ['created_at', 'deleted_at'];
}
