<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('app_name')->nullable(true);
            $table->enum('locale', ['pt-br', 'en', 'es'])->default('pt-br')->nullable(true);
            $table->enum('callback_locale', ['pt-br', 'en', 'es'])->default('en')->nullable(true);
            $table->enum('debug', ['true', 'false'])->default('false')->nullable(true);
            $table->enum('debugbar', ['true', 'false'])->default('false')->nullable(true);
            $table->string('timezone')->nullable(true)->default('UTC');
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
        Schema::dropIfExists('settings');
    }
}
