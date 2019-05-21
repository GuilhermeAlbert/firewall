<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->default(1)->after('description');
            $table->foreign('status_id')->references('id')->on('status');
            
            $table->unsignedInteger('access_level_id')->default(2)->after('status_id');
            $table->foreign('access_level_id')->references('id')->on('access_levels'); 
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn("status_id");
            $table->dropColumn("access_level_id");
        });
    }
}
