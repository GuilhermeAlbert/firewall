<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModificationLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modification_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address')->nullable(true);
            $table->enum('type', ['add', 'edit', 'delete', 'list']);
            $table->string('object')->nullable(true);
            $table->string('before')->nullable(true);
            $table->string('after')->nullable(true);            
            $table->string('description')->nullable(true);
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
        Schema::dropIfExists('modification_logs');
    }
}
