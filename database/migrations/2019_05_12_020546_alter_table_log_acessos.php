<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLogAcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('log_acessos', function (Blueprint $table) {        
            // $table->unsignedInteger('id_usuario');
            // $table->foreign('id_usuario')->references('id')->on('users');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('log_acessos', function (Blueprint $table) {
            $table->dropColumn("id_usuario");        
        }); 
    }
}
