<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $table = 'preferences';

    protected $fillable = [
        'locale',
        'receive_log_mails',
    ];
}
