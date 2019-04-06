<?php

Route::prefix('dashboard')->group(function () {
    Route::name('dashboard.')
        ->group(function () {
            Route::get('/listar', 'DashboardController@listar')->name('listar');
        });
});

Route::prefix('usuarios')->group(function () {
    Route::name('usuarios.')
        ->group(function () {
            Route::get('/listar', 'UsuarioController@listar')->name('listar');

            Route::get('/cadastrar', function () {
                // Busca permissões de acordo com o nível de acesso diferente de S (Sistema)
                $permissoes = \App\Permissao::all()->where("nivel", "!=", "S");

                return view('layouts.app.usuarios.cadastrar', [
                    'permissoes' => $permissoes,
                ]);
            })->name('cadastrar'); 

            Route::get('/editar/{id}', function (Request $request, $id) {
                
                $usuario = \App\User::find($id);
                $permissoes = \App\Permissao::all()->where("nivel", "!=", "S");

                return view('layouts.app.usuarios.editar',
                    [
                        'id' => $id,
                        'permissoes' => $permissoes,
                        'usuario' => $usuario,
                    ]
                );
            })->name('editar');

            Route::post('/cadastrar', 'UsuarioController@cadastrar')->name('cadastrar');    
            Route::post('/editar_usuario','UsuarioController@editar')->name('editar_usuario');
            Route::post('/excluir','UsuarioController@excluir')->name('excluir');    
                                      
        });
});

Route::prefix('permissoes')->group(function () {
    Route::name('permissoes.')
        ->group(function () {
            Route::get('/listar', 'PermissaoController@listar', function () {
                return view('layouts.app.permissoes.listar');
            })->name('listar');
        });
});