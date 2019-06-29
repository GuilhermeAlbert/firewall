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

    public static function saveAll($domain){
        //$domians = self::getByDeny();
        //foreach ( $domians as $key => $domain) {
            $command = 'bash -c "echo "'.$domain.'" >> /etc/squid/regras/sites_bloqueados"';
            FirewallController::execute_shell_command($command);
        
    }
    
}
