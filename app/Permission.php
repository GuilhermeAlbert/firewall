<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $primaryKey = 'id';

    protected $fillable = [
        'description',
        'status_id',
    ];

    protected $dates = ['created_at', 'deleted_at'];

    // Getting permissions according the access level different of S (System)
	public static function getByAccessLevelUser() {
        return Permission::all()->where("access_level_id", "!=", "1");
    }      
}
