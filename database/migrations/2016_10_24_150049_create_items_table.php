<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_category_id')->unsigned();
            $table->foreign->('item_category_id')->references('id')->on('item_categories');
            $table->integer('manufacturer_id')->unsigned();
            $table->foreign->('manufacturer_id')->references('id')->on('manufacturers');
            $table->string('model_number', 45);
            $table->string('size', 10);
            $table->string('description', 500);
            $table->string('price');
            $table->string('image', 70);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
