<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 180)->unique();
            $table->text('description')->nullable();
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('catalogs', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('catalogs')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogs');
    }
}
