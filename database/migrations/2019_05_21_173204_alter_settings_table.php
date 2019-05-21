<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->after('language');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('status_id')->default(1)->after('user_id');
            $table->foreign('status_id')->references('id')->on('status'); 
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn("user_id");
            $table->dropColumn("status_id");
        });
    }
}
