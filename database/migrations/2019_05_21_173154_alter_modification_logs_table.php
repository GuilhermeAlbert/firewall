<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterModificationLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modification_logs', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->after('object');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('operation_id')->after('user_id');
            $table->foreign('operation_id')->references('id')->on('operation');            

            $table->unsignedInteger('status_id')->default(1)->after('operation_id');
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
        Schema::table('modification_logs', function (Blueprint $table) {
            $table->dropColumn("user_id");
            $table->dropColumn("operation_id");
            $table->dropColumn("status_id");
        });
    }
}
