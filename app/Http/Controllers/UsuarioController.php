<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;

class UsuarioController extends Controller
{
    public function listar(Request $request)
    {
        $usuarios = DB::table('users')
            ->join('permissoes', 'permissoes.id', '=', 'users.id_permissao')
            ->select('permissoes.descricao as permissao_descricao', 'users.*')
            ->where('users.status', '!=', 'E')
            ->get();        

        return response()->view('layouts.app.usuarios.listar', [
            'usuarios' => $usuarios,
        ]);
    }

    public function cadastrar(Request $request)
    {
        $usuarios = new User();
        $usuarios->name = $request->input('name');
        $usuarios->email = $request->input('email');
        $usuarios->password = Hash::make($request->input('password'));
        $usuarios->id_permissao = $request->input('id_permissao');
        $usuarios->save();

		return redirect()->route('usuarios.listar');
    }    
}
