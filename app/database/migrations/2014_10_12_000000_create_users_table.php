<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 180);
            $table->string('email', 180)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_male')->nullable();
            $table->string('password');
            $table->string('avatar_link', 180)->nullable();
            $table->string('address', 180)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
