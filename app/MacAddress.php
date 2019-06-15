<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MacAddress extends Model
{
    protected $table = 'mac_addresses';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'description',
        'status_id',
        'group_id',
        'action'
    ];

    protected $dates = ['created_at', 'deleted_at'];

    public static function getByAllow(){
        MacAddress::all()->where("action", "=", "allow");
    }

    public static function getByDeny(){
        MacAddress::all()->where("action", "=", "deny");
    }     
}
