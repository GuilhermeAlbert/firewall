<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $primaryKey = 'id';

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
        'debug',
        'debugbar',
        'os_user_pass'
    ];

    protected $dates = ['created_at', 'deleted_at'];
}
