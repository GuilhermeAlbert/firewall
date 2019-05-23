<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'locale',
        'fallback_locale',
        'timezone',
        'mail_driver',
        'mail_port',
        'mail_host',
        'mail_username',
        'mail_password',
        'mail_encryption',
    ];
}
