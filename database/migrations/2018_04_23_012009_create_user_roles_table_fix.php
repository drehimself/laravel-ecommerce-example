<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolesTableFix extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('user_roles', function (Blueprint $table) {
        //     $table->integer('user_id')->unsigned()->index();
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->integer('role_id')->unsigned()->index();
        //     $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        //     $table->primary(['user_id', 'role_id']);
        // });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('user_roles');
    }
}
