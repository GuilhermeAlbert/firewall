<?php

namespace App\Http\Controllers;
use App\LogAcesso;

use Illuminate\Http\Request;

class LogAcessoController extends Controller
{
    public function listar(Request $request)
    {
        $log_acessos = LogAcesso::all()->where("id_usuario", "=", Auth()->user()->id);

        return response()->view('layouts.app.log_acesso.listar', [
            'log_acessos' => $log_acessos
        ]);
    }
}
