<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $table = 'keywords';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'description',
        'status_id',
        'group_id',
        'action'
    ];

    protected $dates = ['created_at', 'deleted_at'];

    public static function getByAllow(){
        Keyword::all()->where("action", "=", "allow");
    }

    public static function getByDeny(){
        Keyword::all()->where("action", "=", "deny");
    }     
}
