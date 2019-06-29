<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllowIpAddressController extends Controller
{
    /** 
     * List the allowed ip addresses 
     * 
     * @return void
     */
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.ip_address.list');
    }   

    /** 
     * Add the allowed ip addresses 
     * 
     * @return void
     */    
    public function add(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.ip_address.add');
    }

    /** 
     * Edit the allowed ip addresses 
     * 
     * @return void
     */    
    public function edit(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.ip_address.edit');
    }      

    /** 
     * Delete the allowed ip addresses 
     * 
     * @return void
     */    
    public function delete(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.ip_address.delete');
    }
}
