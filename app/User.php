<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'status_id',
        'access_level_id',
        'permission_id',
    ];

    protected $dates = ['created_at', 'deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];
    
    /**
     *  Getting users and the permission's description
     *  
     *  @return void
     */     
	public static function getActives() {
        // Sending data to return
        return DB::table('users')
        ->join('permissions', 'permissions.id', '=', 'users.permission_id')
        ->select('permissions.description as permission', 'users.*')
        ->where('users.status_id', '!=', '3')
        ->get(); 
    }    

    /**
     *  Getting personal profile information 
     *  
     *  @return void
     */     
	public static function getProfile($user_id) {
        // Sending data to return
        return User::all()->where('id' ,'=', $user_id)->first();
    } 

    /**
     *  Getting count of active users
     *  
     *  @return void
     */     
	public static function getActiveCount() {
        // Sending data to return
        return User::all()->where('status_id', '=', 1)->count();
    }  

    /**
     *  Getting count of inactive users
     *  
     *  @return void
     */     
	public static function getInactiveCount() {
        // Sending data to return
        return User::all()->where('status_id', '=', 2)->count();
    }

    /**
     *  Getting count of excluded users
     *  
     *  @return void
     */     
	public static function getExcludedCount() {
        // Sending data to return
        return User::all()->where('status_id', '=', 3)->count();
    }

    /**
     *  Getting count of all users
     *  
     *  @return void
     */     
	public static function getAllCount() {
        // Sending data to return
        return User::all()->count();
    }
}
