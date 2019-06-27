<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */ 
    protected $table = 'status';

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
