<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            Schema::enableForeignKeyConstraints();

            $table->unsignedInteger('permission_id')->default(1)->after('password');
            $table->foreign('permission_id')->references('id')->on('permissions');

            $table->unsignedInteger('status_id')->default(1)->after('permission_id');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("permission_id");
            $table->dropColumn("status_id");
            $table->dropColumn("access_level_id");
        }); 
    }
}
