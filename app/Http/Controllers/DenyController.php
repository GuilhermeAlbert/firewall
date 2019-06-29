<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FirewallController;
use App\Domain;

class DenyController extends Controller
{
    public function list(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.list');
    }

    public function list_by_mac(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.mac_address.list');
    }  

    public function list_by_ip(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.ip_address.list');
    }  

    public function list_by_keywords(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.keywords.list');
    }  

    public function list_by_domains(Request $request)
    {
        // Sending data to view
        return response()->view('app.deny.domains.list', ['domains' => Domain::getByDeny()]);
    }    
    public function add_domains(Request $request){
        return response()->view('app.deny.domains.add');
    }
    public function add_domains_post( Request $request){
        $domain = new Domain();
        $domain->description = $request->input('domain');
        $domain->status_id = 1;
        $domain->group_id = 1;
        $domain->action = 'deny';
        $domain->save();
        Domain::saveAll($request->input('domain'));
        return $this->list_by_domains($request);
    }
}
