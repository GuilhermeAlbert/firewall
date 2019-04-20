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

    public function cadastrar(Request $request){

        // Busca permissões de acordo com o nível de acesso diferente de S (Sistema)
        $permissoes = \App\Permissao::all()->where("nivel", "!=", "S");

        return view('layouts.app.usuarios.cadastrar', [
            'permissoes' => $permissoes,
        ]);        
    }    

    public function editar(Request $request, $id){
        
        $usuario = \App\User::find($id);
        $permissoes = \App\Permissao::all()->where("nivel", "!=", "S");

        return view('layouts.app.usuarios.editar',
            [
                'id' => $id,
                'permissoes' => $permissoes,
                'usuario' => $usuario,
            ]
        );       
    } 

    public function cadastrar_usuario(Request $request)
    {
        $usuarios = new User();
        $usuarios->name = $request->input('name');
        $usuarios->email = $request->input('email');
        $usuarios->password = Hash::make($request->input('password'));
        $usuarios->id_permissao = $request->input('id_permissao');
        $usuarios->save();

		return redirect()->route('usuarios.listar');
    }    

    public function editar_usuario(Request $request)
    {
        $usuario = User::find($request->input('id'));
        $usuario->name = $request['name'];
        $usuario->email = $request['email'];
        $usuario->password = Hash::make($request['password']);
        $usuario->id_permissao = $request['id_permissao'];        
        $usuario->save();

        return redirect()->route('usuarios.listar');
    }   

    public function excluir_usuario(Request $request)
    {
        $usuario = User::find($request->input('id'));

        try {
            $usuario->status = "E";
            $usuario->save();

            return redirect()->route('usuarios.listar');
        } catch (Exception $e) {
            return redirect()->route('usuarios.listar');
        }
    }     
}
