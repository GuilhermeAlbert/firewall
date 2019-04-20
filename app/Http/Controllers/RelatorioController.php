<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function listar(Request $request)
    {
        return response()->view('layouts.app.relatorios.listar');
    }
}
