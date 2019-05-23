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
            $table->enum('fallback_locale', ['pt-br', 'en', 'es'])->default('en')->nullable(true);
            $table->enum('debug', ['true', 'false'])->default('false')->nullable(true);
            $table->enum('debugbar', ['true', 'false'])->default('false')->nullable(true);
            $table->string('timezone')->nullable(true)->default('UTC');
            $table->string('mail_driver')->nullable(true)->default('smtp');
            $table->string('mail_port')->nullable(true)->default('2525');
            $table->string('mail_host')->nullable(true);
            $table->string('mail_username')->nullable(true);
            $table->string('mail_password')->nullable(true);
            $table->string('mail_encryption')->nullable(true); 
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
