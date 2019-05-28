<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['add', 'edit', 'delete', 'list']);
            $table->enum('object', ['user', 'permission', 'group', 'settings', 'preference', 'language', 'icon', 'status']);
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
        Schema::dropIfExists('operation');
    }
}
