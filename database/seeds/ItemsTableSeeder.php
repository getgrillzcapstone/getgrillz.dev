<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $item1 = new App\Item();
    $item1->item_category_id = 1;
    $item1->manufacturer_id = 1;
    $item1->model = 'Genesis 310';
    $item1->size = 'Medium';
    $item1->description = 'Lorem impsum text is for sample.';
    $item1->price = 699.99;
    $item1->image = '/propane_grill_images/webergenesis310.jpg';
    $item1->save();

    $item2 = new App\Item();
    $item2->item_category_id = 1;
    $item2->manufacturer_id = 1;
    $item2->model = 'Spirit 210';
    $item2->size = 'Small';
    $item2->description = 'Lorem impsum text is for sample.';
    $item2->price = 399.99;
    $item2->image = '/propane_grill_images/weberspirit210.jpg';
    $item2->save();

    $item3 = new App\Item();
    $item3->item_category_id = 1;
    $item3->manufacturer_id = 1;
    $item3->model = 'Summitt 420';
    $item3->size = 'Large';
    $item3->description = 'Lorem impsum text is for sample.';
    $item3->price = 999.99;
    $item3->image = '/propane_grill_images/webersummitt420.jpg';
    $item3->save();

    $item4 = new App\Item();
    $item4->item_category_id = 1;
    $item4->manufacturer_id = 1;
    $item4->model = 'Summitt 670';
    $item4->size = 'Large';
    $item4->description = 'Lorem impsum text is for sample.';
    $item4->price = 1299.99;
    $item4->image = '/propane_grill_images/webersummitt670.jpg';
    $item4->save();

    $item5 = new App\Item();
    $item5->item_category_id = 1;
    $item5->manufacturer_id = 10;
    $item5->model = 'Two Burner';
    $item5->size = 'Small';
    $item5->description = 'Lorem impsum text is for sample.';
    $item5->price = 175.00;
    $item5->image = '/propane_grill_images/smokehollow2burner.jpg';
    $item5->save();

    $item6 = new App\Item();
    $item6->item_category_id = 1;
    $item6->manufacturer_id = 10;
    $item6->model = 'Table Top';
    $item6->size = 'Small';
    $item6->description = 'Lorem impsum text is for sample.';
    $item6->price = 95.00;
    $item6->image = '/propane_grill_images/smokehollow-tabletop.jpg';
    $item6->save();

    $item7 = new App\Item();
    $item7->item_category_id = 1;
    $item7->manufacturer_id = 10;
    $item7->model = 'Four Burner';
    $item7->size = 'Large';
    $item7->description = 'Lorem impsum text is for sample.';
    $item7->price = 375.00;
    $item7->image = '/propane_grill_images/smokehollow4burner.jpg';
    $item7->save();

    $item8 = new App\Item();
    $item8->item_category_id = 1;
    $item8->manufacturer_id = 4;
    $item8->model = 'Two Burner';
    $item8->size = 'Small';
    $item8->description = 'Lorem impsum text is for sample.';
    $item8->price = 189.75;
    $item8->image = '/propane_grill_images/nexgrill2burner.jpg';
    $item8->save();

    $item9 = new App\Item();
    $item9->item_category_id = 1;
    $item9->manufacturer_id = 4;
    $item9->model = 'Four Burner';
    $item9->size = 'Medium';
    $item9->description = 'Lorem impsum text is for sample.';
    $item9->price = 299.00;
    $item9->image = '/propane_grill_images/nexgrill4burner.jpg';
    $item9->save();

    $item10 = new App\Item();
    $item10->item_category_id = 1;
    $item10->manufacturer_id = 4;
    $item10->model = 'Five Burner';
    $item10->size = 'Large';
    $item10->description = 'Lorem impsum text is for sample.';
    $item10->price = 435.75;
    $item10->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item10->save();
}
}