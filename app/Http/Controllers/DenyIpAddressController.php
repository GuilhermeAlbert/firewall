<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenyIpAddressController extends Controller
{
    /** 
     * List the blocked ip addresses 
     * 
     * @return void
     */
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.ip_address.list');
    }   

    /** 
     * Add the blocked ip addresses 
     * 
     * @return void
     */    
    public function add(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.ip_address.add');
    }

    /** 
     * Edit the blocked ip addresses 
     * 
     * @return void
     */    
    public function edit(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.ip_address.edit');
    }      

    /** 
     * Delete the blocked ip addresses 
     * 
     * @return void
     */    
    public function delete(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.ip_address.delete');
    }
}
