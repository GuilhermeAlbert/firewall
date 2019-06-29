<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\FirewallController;

class Domain extends Model
{
/**
     * Instancing table of database
     *
     * @var string
     */     
    protected $table = 'domains';

    /**
     * The primary key of table
     *
     * @var string
     */     
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */     
    protected $fillable = [
        'description',
        'status_id',
        'group_id',
        'action'
    ];

    /**
     * Instancing dates of the table
     *
     * @var array
     */    
    protected $dates = ['created_at', 'deleted_at'];

    /**
     *  Getting all allowed domains
     *  
     *  @return void
     */     
    public static function getByAllow(){
        // Sending data to return
        return Domain::all()->where("action", "=", "allow");
    }

    /**
     *  Getting all blocked domains
     *  
     *  @return void
     */      
    public static function getByDeny(){
        // Sending data to return
        return Domain::all()->where("action", "=", "deny");
    }

    /**
     *  Save a typed domain on shell allow archive
     *  
     *  @return void
     */      
    public static function saveAllowArchive($domain){
        // The shell command
        $command = 'bash -c "echo "'.$domain.'" >> /etc/squid/regras/sites_liberados"';

        // Execute a shell command
        FirewallController::execute_shell_command($command);
    }
    
    /**
     *  Save a typed domain on shell deny archive
     *  
     *  @return void
     */      
    public static function saveDenyArchive($domain){
        // The shell command
        $command = 'bash -c "echo "'.$domain.'" >> /etc/squid/regras/sites_bloqueados"';

        // Execute a shell command
        FirewallController::execute_shell_command($command);
    }    
}
