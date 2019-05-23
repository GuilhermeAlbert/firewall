<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    protected $fillable = [
        'description',
        'fallback_description',
        'country',
        'initials',
    ];
}
