<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->foreign->('item_id')->references('id')->on('items');
            $table->integer('user_id')->unsigned();
            $table->foreign->('user_id')->references('id')->on('users');
            $table->date('reservation_start');
            $table->date('reservation_end');
            $table->string('order_total', 10);
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
        Schema::drop('orders');
    }
}
