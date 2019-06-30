<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FirewallController;
use App\Domain;

class DenyDomainController extends Controller
{
    /** 
     * List the blocked domains 
     * 
     * @return void
     */
    public function list(Request $request)
    {
        // Getting all domains
        $domains = Domain::all();

        // Sending data to view
        return response()->view('app.deny.domains.list', ['domains' => $domains]);
    }   

    /** 
     * List the blocked domains on view add
     * 
     * @return void
     */    
    public function add(Request $request)
    {
        // Getting all domains
        $domains = Domain::all();

        // Sending data to view
        return response()->view('app.deny.domains.add', ['domains' => $domains]);
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
        $domain->action = 'deny';
        $domain->save();

        // Save the typed domain on iptables shell archive
        Domain::saveDenyArchive($typed_domain);

        // Return data on view
        return redirect()->route('deny.domains.list');
    }    

    /** 
     * Edit the blocked domains 
     * 
     * @return void
     */    
    public function edit(Request $request, $id)
    {
        // Getting domain by id
        $domain = Domain::find($id);

        // Sending data to view
        return response()->view('app.deny.domains.edit', [ 
            'id' => $id,
            'domain' => $domain 
        ]);
    }      

    /** 
     * Delete the blocked domains 
     * 
     * @return void
     */    
    public function delete(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.domains.delete');
    }
}
