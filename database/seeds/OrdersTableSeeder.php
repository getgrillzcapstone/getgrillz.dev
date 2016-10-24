<?php

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $order1 = new App\Orders();
    $order1->item_id = 4;
    $order1->user_id = 4;
    $order1->reservation_start = 2016/12/20;
    $order1->reservation_end = 2016/12/27;
    $order1->save();

    $order2 = new App\Orders();
    $order2->item_id = 2;
    $order2->user_id = 6;
    $order2->reservation_start = 2016/12/02;
    $order2->reservation_end = 2016/12/05;
    $order2->save();

    $order3 = new App\Orders();
    $order3->item_id = 6;
    $order3->user_id = 8;
    $order3->reservation_start = 2017/01/12;
    $order3->reservation_end = 2017/01/16;
    $order3->save();

    
}
}