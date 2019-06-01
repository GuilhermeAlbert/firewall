<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $table = 'preferences';

    protected $primaryKey = 'id';

    protected $fillable = [
        'locale',
        'receive_log_mails',
    ];

    protected $dates = ['created_at', 'deleted_at'];

    public static function getUserPreferences($user_id) {
        return Preference::all()->where('user_id', '=', $user_id)->where('status_id', '=', '1')->first();
    }
}
