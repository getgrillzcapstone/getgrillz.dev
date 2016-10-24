<?php

use Illuminate\Database\Seeder;

class OrderItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $orderitem1 = new App\OrderItem;
    $orderitem1->order_id = 1;
    $orderitem1->item_id = 4;
    $orderitem1->quantity = 1;
    $orderitem1->save();

    $orderitem2 = new App\OrderItem;
    $orderitem2->order_id = 2;
    $orderitem2->item_id = 6;
    $orderitem2->quantity = 1;
    $orderitem2->save();

    $orderitem3 = new App\OrderItem;
    $orderitem3->order_id = 3;
    $orderitem3->item_id = 9;
    $orderitem3->quantity = 1;
    $orderitem3->save();

    
    
}
}