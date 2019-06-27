<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLevel extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */    
    protected $table = 'access_levels';

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
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */
    protected $dates = ['created_at', 'deleted_at'];
}
