<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MacAddress extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */     
    protected $table = 'mac_addresses';

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
        'group_id',
        'action'
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */    
    protected $dates = ['created_at', 'deleted_at'];

    /**
     *  Getting all allowed mac address
     *  
     *  @return void
     */     
    public static function getByAllow(){
        // Sending data to return
        MacAddress::all()->where("action", "=", "allow");
    }

    /**
     *  Getting all blocked mac address
     *  
     *  @return void
     */      
    public static function getByDeny(){
        // Sending data to return
        MacAddress::all()->where("action", "=", "deny");
    }     
}
