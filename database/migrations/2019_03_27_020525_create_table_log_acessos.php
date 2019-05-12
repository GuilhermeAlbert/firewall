<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLogAcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_acessos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('endereco_ip');
            $table->enum('tipo', ['login', 'logout']);
            $table->unsignedInteger('id_usuario');
            $table->enum('status', ['A', 'I', 'E'])->default("A");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_acessos');
    }
}
