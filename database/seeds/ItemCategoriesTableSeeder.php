<?php

use Illuminate\Database\Seeder;

class ItemCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'propane-grill';
    $item_category1->divisor = 30;
    $item_category1->base_cost = 9.99;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'charcoal-grill';
    $item_category1->divisor = 30;
    $item_category1->base_cost = 7.99;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'tool-set';
    $item_category1->divisor = 10;
    $item_category1->base_cost = 3.50;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'table';
    $item_category1->divisor = 10;
    $item_category1->base_cost = 7.99;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'chair';
    $item_category1->divisor = 10;
    $item_category1->base_cost = 4.99;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'utensils';
    $item_category1->divisor = 1;
    $item_category1->base_cost = 5.00;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'skewers';
    $item_category1->divisor = 1;
    $item_category1->base_cost = 5.00;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'rotisserie';
    $item_category1->divisor = 10;
    $item_category1->base_cost = 3.50;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'planks';
    $item_category1->divisor = 1;
    $item_category1->base_cost = 5.00;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'rib-rack';
    $item_category1->divisor = 10;
    $item_category1->base_cost = 2.50;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'vegetable-basket';
    $item_category1->divisor = 10;
    $item_category1->base_cost = 2.50;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'fish-basket';
    $item_category1->divisor = 10;
    $item_category1->base_cost = 2.50;
    $item_category1->save();

    $item_category1 = new App\ItemCategory();
    $item_category1->name = 'turf-mat';
    $item_category1->divisor = 10;
    $item_category1->base_cost = 5.00;
    $item_category1->save();





}
}