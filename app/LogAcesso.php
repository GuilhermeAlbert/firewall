<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogAcesso extends Model
{
    protected $table = 'log_acessos';

    protected $fillable = [
        'endereco_ip',
        'tipo',
        'status',
        'id_usuario',
    ];
}
