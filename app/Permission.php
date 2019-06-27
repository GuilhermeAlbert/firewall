<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */     
    protected $table = 'permissions';

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
        'description',
        'status_id',
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */    
    protected $dates = ['created_at', 'deleted_at'];

    /**
     *  Getting permissions according the access level different of S (System)
     *  
     *  @return void
     */      
	public static function getByAccessLevelUser() {
        // Sending data to return
        return Permission::all()->where("access_level_id", "!=", "1");
    }      
}
