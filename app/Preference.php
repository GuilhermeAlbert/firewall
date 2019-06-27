<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */     
    protected $table = 'preferences';

    /**
     * The primary key of table
     *
     * @var string
     */     
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */     
    protected $fillable = [
        'locale',
        'receive_log_mails',
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */    
    protected $dates = ['created_at', 'deleted_at'];

    /**
     *  Getting user preferences
     *  
     *  @return void
     */      
    public static function getUserPreferences($user_id) {
        return Preference::all()->where('user_id', '=', $user_id)->where('status_id', '=', '1')->first();
    }
}
