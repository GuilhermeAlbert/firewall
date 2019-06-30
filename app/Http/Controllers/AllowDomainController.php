<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllowDomainController extends Controller
{
    /** 
     * List the allowed domains 
     * 
     * @return void
     */
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.domains.list');
    }   

    /** 
     * Add the allowed domains 
     * 
     * @return void
     */    
    public function add(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.domains.add');
    }

    /** 
     * Add the blocked domains 
     * 
     * @return void
     */      
    public function add_domain(Request $request)
    {
        // Initializing the Domain
        $domain = new Domain();

        // The domain typed on input
        $typed_domain = $request->input('domain');

        // Save the typed domain on database
        $domain->description = $typed_domain;        
        $domain->status_id = 1;
        $domain->group_id = 1;
        $domain->action = 'allow';
        $domain->save();

        // Save the typed domain on iptables shell archive
        Domain::saveAllowArchive($typed_domain);

        // Return data on view
        return redirect()->route('allow.domains.list');
    }      

    /** 
     * Edit the allowed domains 
     * 
     * @return void
     */    
    public function edit(Request $request, $id)
    {
        // Getting domain by id
        $domain = Domain::find($id);

        // Sending data to view
        return response()->view('app.allow.domains.edit', [ 
            'id' => $id,
            'domain' => $domain 
        ]);
    }      

    /** 
     * Delete the allowed domains 
     * 
     * @return void
     */    
    public function delete(Request $request)
    {
        // Sending data to view
        return response()->view('app.allow.domains.delete');
    }
}
