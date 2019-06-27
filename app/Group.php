<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */     
    protected $table = 'groups';

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
        'title',
        'description',
        'initial_time',
        'final_time',
        'html_icon',
        'selected'
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */    
    protected $dates = ['created_at', 'deleted_at'];

    /**
     *  Setting groups to unselected
     *  
     *  @return void
     */    
	public static function setUnselected() {
        
        // Getting all groups
        $groups = Group::all(); 

        // Cleaning selected: Parsing to false
        foreach ($groups as $key => $group) {
            
            // Parsing content to false
            $group->selected = "false";
            
            // Saving data updated on database 
            $group->save();
        }         
    }      

    /**
     *  Getting count of active groups
     *  
     *  @return void
     */    
	public static function getActiveCount() {
        // Sending number to return
        return User::all()->where('status_id', '=', 1)->count();
    }  
    
    /**
     *  Getting count of inactive groups
     *  
     *  @return void
     */    
	public static function getInactiveCount() {
        // Sending number to return
        return User::all()->where('status_id', '=', 2)->count();
    }

    /**
     *  Getting count of excluded groups
     *  
     *  @return void
     */    
	public static function getExcludedCount() {
        // Sending number to return
        return User::all()->where('status_id', '=', 3)->count();
    }

    /**
     *  Getting count of all groups
     *  
     *  @return void
     */    
	public static function getAllCount() {
        // Sending number to return
        return User::all()->count();
    }    
}
