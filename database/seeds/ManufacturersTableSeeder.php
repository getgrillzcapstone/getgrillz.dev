<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $manufacturer1 = new App\Manufacturer();
    $manufacturer1->name = 'Weber';
    $manufacturer1->image = '/getgrillz_images/weber-logo.png';
    $manufacturer1->save();

    $manufacturer2 = new App\Manufacturer();
    $manufacturer2->name = 'Charbroil';
    $manufacturer2->image = '/getgrillz_images/charbroil-logo.png';
    $manufacturer2->save();

    $manufacturer3 = new App\Manufacturer();
    $manufacturer3->name = 'Napoleon';
    $manufacturer3->image = '/getgrillz_images/napoleon-logo.png';
    $manufacturer3->save();

    $manufacturer4 = new App\Manufacturer();
    $manufacturer4->name = 'Nexgrill';
    $manufacturer4->image = '/getgrillz_images/nexgrill-logo.png';
    $manufacturer4->save();

    $manufacturer5 = new App\Manufacturer();
    $manufacturer5->name = 'Big Green Egg';
    $manufacturer5->image = '/getgrillz_images/greenegg-logo.jpg';
    $manufacturer5->save();

    $manufacturer6 = new App\Manufacturer();
    $manufacturer6->name = 'Dyna-Glo';
    $manufacturer6->image = '/getgrillz_images/dynaglo-logo.png';
    $manufacturer6->save();

    $manufacturer7 = new App\Manufacturer();
    $manufacturer7->name = 'Chargriller';
    $manufacturer7->image = '/getgrillz_images/chargriller-logo.png';
    $manufacturer7->save();

    $manufacturer8 = new App\Manufacturer();
    $manufacturer8->name = 'KitchenAid';
    $manufacturer8->image = '/getgrillz_images/kitchenaid-logo.png';
    $manufacturer8->save();

    $manufacturer9 = new App\Manufacturer();
    $manufacturer9->name = 'MasterBuilt';
    $manufacturer9->image = '/getgrillz_images/masterbuilt-logo.jpg';
    $manufacturer9->save();

    $manufacturer10 = new App\Manufacturer();
    $manufacturer10->name = 'Smoke Hollow';
    $manufacturer10->image = '/getgrillz_images/smokehollow-logo.jpg';
    $manufacturer10->save();

    $manufacturer11 = new App\Manufacturer();
    $manufacturer11->name = 'Rivergrille';
    $manufacturer11->image = '/getgrillz_images/rivergrille-logo.jpg';
    $manufacturer11->save();

    $manufacturer12 = new App\Manufacturer();
    $manufacturer12->name = 'Kingsford';
    $manufacturer12->image = '/getgrillz_images/kingsford-logo.jpg';
    $manufacturer12->save();

    $manufacturer13 = new App\Manufacturer();
    $manufacturer13->name = 'Stok';
    $manufacturer13->image = '/getgrillz_images/stok-logo.jpg';
    $manufacturer13->save();
}
}