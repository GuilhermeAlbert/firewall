<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */     
    protected $table = 'settings';

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
        'user_root_password'
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */    
    protected $dates = ['created_at', 'deleted_at'];

    /**
     *  Getting Operational System root password 
     *  
     *  @return void
     */
    public static function getRootPassword() {
        // Sending data to return
        return Setting::first()->user_root_password;
    } 
}
