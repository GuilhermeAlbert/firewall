<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IpAddress extends Model
{
    protected $table = 'ip_addresses';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'description',
        'status_id',
        'group_id',
        'action'
    ];

    protected $dates = ['created_at', 'deleted_at'];

    public static function getByAllow(){
        IpAddress::all()->where("action", "=", "allow");
    }

    public static function getByDeny(){
        IpAddress::all()->where("action", "=", "deny");
    }    
}
