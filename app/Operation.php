<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */     
    protected $table = 'operations';

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
        'ip_address',
        'object',
        'user_id',
        'operation_id',
        'status_id',
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */    
    protected $dates = ['created_at', 'deleted_at'];
}
