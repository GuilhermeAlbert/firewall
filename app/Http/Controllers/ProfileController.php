<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function list(Request $request)
    {
        return response()->view('layouts.app.settings.list');
    }

    public function edit(Request $request)
    {
    	$user = User::all()->where('id' ,'=', $request->user()->id)->first();
    	
        return response()->view('layouts.app.profile.edit', ['user' => $user]);
    }    
}
