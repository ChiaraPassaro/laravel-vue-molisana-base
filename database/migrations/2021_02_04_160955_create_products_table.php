<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->unsignedTinyInteger('cooking_time');
            $table->unsignedSmallInteger('weight');
            $table->string('thumb_img');
            $table->string('header_img');
            $table->string('big_img');
            $table->unsignedBigInteger('shape_id');
            $table->timestamps();

            $table->foreign('shape_id')
                ->references('id')->on('shapes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
