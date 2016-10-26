<?php

use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $order_item1 = new App\OrderItem;
    $order_item1->order_id = 1;
    $order_item1->item_id = 4;
    $order_item1->save();

    $order_item2 = new App\OrderItem;
    $order_item2->order_id = 2;
    $order_item2->item_id = 6;
    $order_item2->save();

    $order_item3 = new App\OrderItem;
    $order_item3->order_id = 3;
    $order_item3->item_id = 9;
    $order_item3->save();

    
    
}
}