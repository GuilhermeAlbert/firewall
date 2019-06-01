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
}
