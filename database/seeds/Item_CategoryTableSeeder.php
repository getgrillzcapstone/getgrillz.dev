<?php

class Item_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $item_category1 = new App\ItemCategory();
    $item_category1->'propane_grill';
    $item_category1->save();

    $item_category2 = new App\ItemCategory();
    $item_category2->'charcoal_grill';
    $item_category2->save();

    $item_category3 = new App\ItemCategory();
    $item_category3->'tool_set';
    $item_category3->save();

    $item_category4 = new App\ItemCategory();
    $item_category4->'table';
    $item_category4->save();

    $item_category5 = new App\ItemCategory();
    $item_category5->'chair';
    $item_category5->save();

    $item_category6 = new App\ItemCategory();
    $item_category6->'utensils';
    $item_category6->save();

    $item_category7 = new App\ItemCategory();
    $item_category7->'skewers';
    $item_category7->save();

    $item_category8 = new App\ItemCategory();
    $item_category8->'rotisserie';
    $item_category8->save();

    $item_category9 = new App\ItemCategory();
    $item_category9->'planks';
    $item_category9->save();

    $item_category10 = new App\ItemCategory();
    $item_category10->'rib_rack';
    $item_category10->save();

    $item_category11 = new App\ItemCategory();
    $item_category11->'vegetable_basket';
    $item_category11->save();

    $item_category12 = new App\ItemCategory();
    $item_category12->'fish_basket';
    $item_category12->save();

    $item_category13 = new App\ItemCategory();
    $item_category13->'turf_mat';
    $item_category13->save();
}
}