<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.settings.list');
    }

    public function edit(Request $request)
    {
        // Getting personal profile information
    	$user = User::getProfile($request->user()->id);
        
        // Sending data to view
        return response()->view('app.profile.edit', ['user' => $user]);
    }    
}
