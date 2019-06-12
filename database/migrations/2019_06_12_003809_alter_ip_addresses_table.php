<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterIpAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ip_addresses', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->default(1)->after('description');
            $table->foreign('status_id')->references('id')->on('status'); 

            $table->unsignedInteger('group_id')->default(1)->after('status_id');
            $table->foreign('group_id')->references('id')->on('groups'); 
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ip_addresses', function (Blueprint $table) {
            $table->dropColumn("group_id");
            $table->dropColumn("status_id");
        });
    }
}
