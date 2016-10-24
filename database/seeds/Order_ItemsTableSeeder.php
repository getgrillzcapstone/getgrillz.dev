<?php

class Order_ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $order_item1 = new App\OrderItems();
    $order_item1->order_id = 1;
    $order_item1->item_id = 4;
    $order_item1->quantity = 1;
    $order_item1->save();

    $order_item1 = new App\OrderItems();
    $order_item1->order_id = 2;
    $order_item1->item_id = 6;
    $order_item1->quantity = 1;
    $order_item1->save();

    $order_item1 = new App\OrderItems();
    $order_item1->order_id = 3;
    $order_item1->item_id = 9;
    $order_item1->quantity = 1;
    $order_item1->save();

    
    
}
}