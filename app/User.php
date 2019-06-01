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
    
    // Getting users and the permission's description
	public static function getActives() {
        return DB::table('users')
        ->join('permissions', 'permissions.id', '=', 'users.permission_id')
        ->select('permissions.description as permission', 'users.*')
        ->where('users.status_id', '!=', '3')
        ->get(); 
    }    

    // Getting personal profile information 
	public static function getProfile($user_id) {
        return User::all()->where('id' ,'=', $user_id)->first();
    } 
    
    // Getting count of active users
	public static function getActiveCount() {
        return User::all()->where('status_id', '=', 1)->count();
    }  
    
    // Getting count of inactive users
	public static function getInactiveCount() {
        return User::all()->where('status_id', '=', 2)->count();
    }

    // Getting count of excluded users
	public static function getExcludedCount() {
        return User::all()->where('status_id', '=', 3)->count();
    }

    // Getting count of all users
	public static function getAllCount() {
        return User::all()->count();
    }
}
