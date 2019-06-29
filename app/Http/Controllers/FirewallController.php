<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class FirewallController extends Controller
{
    /**
     *  Execute a shell command
     *  
     *  @return void
     */
    public static function execute_shell_command($command)
    {
        // Getting the root password
        $user_root_password = Setting::getRootPassword();

        // Sending data to return
        return shell_exec( 'echo "'. $user_root_password . '" | sudo -S '. $command);
    }

    /**
     *  Iptables command to get list of ports
     *  
     *  @return void
     */
    public function get_ports(Request $request)
    {
    	// Writing a port list command
		$command = "iptables -L";

		// Returning data to json
		return response(self::execute_shell_command($command));
    }    
}