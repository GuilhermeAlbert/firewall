<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModificationLog extends Model
{
    protected $table = 'modification_logs';

    protected $fillable = [
        'description',
    ];
}
