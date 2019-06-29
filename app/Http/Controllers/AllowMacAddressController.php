<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllowMacAddressController extends Controller
{
    /** 
     * List the allowed mac addresses 
     * 
     * @return void
     */
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.mac_address.list');
    }   

    /** 
     * Add the allowed mac addresses 
     * 
     * @return void
     */    
    public function add(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.mac_address.add');
    }

    /** 
     * Edit the allowed mac addresses 
     * 
     * @return void
     */    
    public function edit(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.mac_address.edit');
    }      

    /** 
     * Delete the allowed mac addresses 
     * 
     * @return void
     */    
    public function delete(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.mac_address.delete');
    }
}
