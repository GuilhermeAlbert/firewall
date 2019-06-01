<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'title',
        'description',
        'initial_time',
        'final_time',
        'html_icon',
        'selected'
    ];

    protected $dates = ['created_at', 'deleted_at'];

    // Setting groups to unselected
	public static function setUnselected() {
        $groups = Group::all(); 

        foreach ($groups as $key => $group) {
            // Saving data updated on database 
            $group->selected = "false";
            $group->save();
        }         
    }      

    // Getting count of active groups
	public static function getActiveCount() {
        return User::all()->where('status_id', '=', 1)->count();
    }  
    
    // Getting count of inactive groups
	public static function getInactiveCount() {
        return User::all()->where('status_id', '=', 2)->count();
    }

    // Getting count of excluded groups
	public static function getExcludedCount() {
        return User::all()->where('status_id', '=', 3)->count();
    }

    // Getting count of all groups
	public static function getAllCount() {
        return User::all()->count();
    }    
}
