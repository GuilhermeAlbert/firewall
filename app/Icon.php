<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    protected $table = 'icons';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'description',
        'unicode',
        'html'
    ];

    protected $dates = ['created_at', 'deleted_at'];
}
