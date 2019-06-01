<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    protected $primaryKey = 'id';

    protected $fillable = [
        'description',
        'fallback_description',
        'country',
        'initials',
    ];

    protected $dates = ['created_at', 'deleted_at'];
}
