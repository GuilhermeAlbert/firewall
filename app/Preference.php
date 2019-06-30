<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Setting;

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
        // Returning data to query
        return Preference::all()->where('user_id', '=', $user_id)->where('status_id', '=', '1')->first();
    }

    /**
     *  Create user default preferences
     *  
     *  @return void
     */      
    public static function setDefaultUserPreferences($user_id) {
        // Getting the settings values
        $settings = Setting::first();

        // Initializing the preferences
        $preferences = new Preference();

        // Attribute values to variables
        $preferences->locale = $settings->locale;
        $preferences->receive_log_mails = 'true';
        $preferences->user_id = $user_id;

        // Saving on database
        $preferences->save();        
    }    
}
