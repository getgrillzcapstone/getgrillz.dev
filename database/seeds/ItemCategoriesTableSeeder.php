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

    $item_category2 = new App\ItemCategory();
    $item_category2->name = 'charcoal-grill';
    $item_category2->divisor = 30;
    $item_category2->base_cost = 7.99;
    $item_category2->save();

    $item_category3 = new App\ItemCategory();
    $item_category3->name = 'tool-set';
    $item_category3->divisor = 10;
    $item_category3->base_cost = 3.50;
    $item_category3->save();

    $item_category4 = new App\ItemCategory();
    $item_category4->name = 'table';
    $item_category4->divisor = 10;
    $item_category4->base_cost = 7.99;
    $item_category4->save();

    $item_category5 = new App\ItemCategory();
    $item_category5->name = 'chair';
    $item_category5->divisor = 10;
    $item_category5->base_cost = 4.99;
    $item_category5->save();

    $item_category6 = new App\ItemCategory();
    $item_category6->name = 'utensils';
    $item_category6->divisor = 1;
    $item_category6->base_cost = 5.00;
    $item_category6->save();

    $item_category7 = new App\ItemCategory();
    $item_category7->name = 'skewers';
    $item_category7->divisor = 1;
    $item_category7->base_cost = 5.00;
    $item_category7->save();

    $item_category8 = new App\ItemCategory();
    $item_category8->name = 'rotisserie';
    $item_category8->divisor = 10;
    $item_category8->base_cost = 3.50;
    $item_category8->save();

    $item_category9 = new App\ItemCategory();
    $item_category9->name = 'planks';
    $item_category9->divisor = 1;
    $item_category9->base_cost = 5.00;
    $item_category9->save();

    $item_category10 = new App\ItemCategory();
    $item_category10->name = 'rib-rack';
    $item_category10->divisor = 10;
    $item_category10->base_cost = 2.50;
    $item_category10->save();

    $item_category11 = new App\ItemCategory();
    $item_category11->name = 'vegetable-basket';
    $item_category11->divisor = 10;
    $item_category11->base_cost = 2.50;
    $item_category11->save();

    $item_category12 = new App\ItemCategory();
    $item_category12->name = 'fish-basket';
    $item_category12->divisor = 10;
    $item_category12->base_cost = 2.50;
    $item_category12->save();

    $item_category13 = new App\ItemCategory();
    $item_category13->name = 'turf-mat';
    $item_category13->divisor = 10;
    $item_category13->base_cost = 5.00;
    $item_category13->save();





}
}