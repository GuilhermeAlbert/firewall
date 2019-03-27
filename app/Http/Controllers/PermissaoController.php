<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permissao;

class PermissaoController extends Controller
{
    public function listar(Request $request)
    {
        $permissoes = Permissao::all()->where('status', '!=', 'E');

        return response()->view('layouts.app.permissoes.listar', [
            'permissoes' => $permissoes,
        ]);
    }
}
