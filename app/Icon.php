<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    /**
     * Instancing table of database
     *
     * @var string
     */     
    protected $table = 'icons';

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
        'unicode',
        'html'
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */    
    protected $dates = ['created_at', 'deleted_at'];
}
