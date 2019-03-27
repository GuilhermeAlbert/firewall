<?php

Route::prefix('dashboard')->group(function () {
    Route::name('dashboard.')
        ->group(function () {
            Route::get('/listar', 'DashboardController@listar', function () {
                return view('layouts.app.dashboard.listar');
            })->name('listar');
        });
});

Route::prefix('usuarios')->group(function () {
    Route::name('usuarios.')
        ->group(function () {
            Route::get('/listar', 'UsuarioController@listar', function () {
                return view('layouts.app.usuarios.listar');
            })->name('listar');
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