<?php

class ItemManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $manufacturer1 = new App\ItemManufacturer();
    $manufacturer1->'weber';
    $manufacturer1->save();

    $manufacturer2 = new App\ItemManufacturer();
    $manufacturer2->'charbroil';
    $manufacturer2->save();

    $manufacturer3 = new App\ItemManufacturer();
    $manufacturer3->'napoleon';
    $manufacturer3->save();

    $manufacturer4 = new App\ItemManufacturer();
    $manufacturer4->'nexgrill';
    $manufacturer4->save();

    $manufacturer5 = new App\ItemManufacturer();
    $manufacturer5->'greenegg';
    $manufacturer5->save();

    $manufacturer6 = new App\ItemManufacturer();
    $manufacturer6->'dynaglo';
    $manufacturer6->save();

    $manufacturer7 = new App\ItemManufacturer();
    $manufacturer7->'chargriller';
    $manufacturer7->save();

    $manufacturer8 = new App\ItemManufacturer();
    $manufacturer8->'kitchenaid';
    $manufacturer8->save();

    $manufacturer9 = new App\ItemManufacturer();
    $manufacturer9->'masterbuilt';
    $manufacturer9->save();

    $manufacturer10 = new App\ItemManufacturer();
    $manufacturer10->'smokehollow';
    $manufacturer10->save();
}
}