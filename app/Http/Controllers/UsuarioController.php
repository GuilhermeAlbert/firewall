<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function listar(Request $request)
    {
        $usuarios = User::all()->where('status', '!=', 'E');

        return response()->view('layouts.app.usuarios.listar', [
            'usuarios' => $usuarios,
        ]);
    }
}
