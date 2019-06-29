<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenyMacAddressController extends Controller
{
    /** 
     * List the blocked mac addresses 
     * 
     * @return void
     */
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.mac_address.list');
    }   

    /** 
     * Add the blocked mac addresses 
     * 
     * @return void
     */    
    public function add(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.mac_address.add');
    }

    /** 
     * Edit the blocked mac addresses 
     * 
     * @return void
     */    
    public function edit(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.mac_address.edit');
    }      

    /** 
     * Delete the blocked mac addresses 
     * 
     * @return void
     */    
    public function delete(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.mac_address.delete');
    }
}
