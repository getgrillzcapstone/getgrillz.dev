<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('item_category', function (Blueprint $table) {
            $table->increments('item_category_id');
            $table->string('propane_grill', 30);
            $table->string('charcoal_grill', 30);
            $table->string('tool_set', 30);
            $table->string('table', 30);
            $table->string('chair', 30);
            $table->string('utensils', 30);
            $table->string('skewers', 30);
            $table->string('rotisserie', 30);
            $table->string('planks', 30);
            $table->string('rib_rack', 30);
            $table->string('vegetable_basket', 30);
            $table->string('fish_basket', 30);
            $table->string('turf_mat', 30);
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
       Schema::drop('item_category');
    }
}
