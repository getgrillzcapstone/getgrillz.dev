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
            $table->increments('item_id');
            $table->string('item_category', 45);
            $table->string('manufacturer', 30);
            $table->string('model_number', 45);
            $table->string('size', 10);
            $table->string('description', 750);
            $table->string('price');
            $table->date('reservation_start');
            $table->date('reservation_end');
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
