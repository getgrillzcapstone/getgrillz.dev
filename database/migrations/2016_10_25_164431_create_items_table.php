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
            $table->integer('item_category_id')->unsigned()->references('id')->on('item_categories');
            $table->integer('manufacturer_id')->unsigned()->references('id')->on('manufacturers');
            $table->string('model', 45);
            $table->string('size', 10);
            $table->string('description', 900);
            $table->decimal('price', 6,2);
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
