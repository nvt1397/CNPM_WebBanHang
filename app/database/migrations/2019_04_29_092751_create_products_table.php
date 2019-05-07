<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 180)->unique();
            $table->decimal('price', 15, 4);
            $table->decimal('star', 2, 1)->default(5);
            $table->integer('rating_number')->default(0);
            $table->string('img_link', 180)->nullable();
            $table->string('img_list', 180)->nullable();
            $table->string('product_string', 180)->nullable();
            $table->text('description')->nullable();
            $table->integer('view')->unsigned()->nullable()->default(0);
            $table->unsignedBigInteger('catalog_id')->nullable();
            $table->unsignedBigInteger('trademark_id')->nullable();
            $table->timestamps();
            $table->foreign('catalog_id')->references('id')->on('catalogs')->onDelete('set null');
            $table->foreign('trademark_id')->references('id')->on('trademarks')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
