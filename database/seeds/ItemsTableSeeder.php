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
    $item1->item_category_id = 'propane_grill';
    $item1->manufacturer_id = 'Weber';
    $item1->model_number = 'Genesis 310';
    $item1->size = 'Medium';
    $item1->description = 'Lorem impsum text is for sample.';
    $item1->price = '$29.00';
    $item1->image = '/propane_grill_images/webergenesis310.jpg';
    $item1->save();

    $item2 = new App\Item();
    $item2->item_category_id = 'propane_grill';
    $item2->manufacturer_id = 'Weber';
    $item2->model_number = 'Spirit 210';
    $item2->size = 'Small';
    $item2->description = 'Lorem impsum text is for sample.';
    $item2->price = '$19.99';
    $item2->image = '/propane_grill_images/weberspirit210.jpg';
    $item2->save();

    $item3 = new App\Item();
    $item3->item_category_id = 'propane_grill';
    $item3->manufacturer_id = 'Weber';
    $item3->model_number = 'Summitt 420';
    $item3->size = 'Large';
    $item3->description = 'Lorem impsum text is for sample.';
    $item3->price = '$39.00';
    $item3->image = '/propane_grill_images/webersummitt420.jpg';
    $item3->save();

    $item4 = new App\Item();
    $item4->item_category_id = 'propane_grill';
    $item4->manufacturer_id = 'Weber';
    $item4->model_number = 'Summitt 670';
    $item4->size = 'Large';
    $item4->description = 'Lorem impsum text is for sample.';
    $item4->price = '$49.00';
    $item4->image = '/propane_grill_images/webersummitt670.jpg';
    $item4->save();

    $item5 = new App\Item();
    $item5->item_category_id = 'propane_grill';
    $item5->manufacturer_id = 'Smoke Hollow';
    $item5->model_number = 'Two Burner';
    $item5->size = 'Small';
    $item5->description = 'Lorem impsum text is for sample.';
    $item5->price = '$17.50';
    $item5->image = '/propane_grill_images/smokehollow2burner.jpg';
    $item5->save();

    $item6 = new App\Item();
    $item6->item_category_id = 'propane_grill';
    $item6->manufacturer_id = 'Smoke Hollow';
    $item6->model_number = 'Table Top';
    $item6->size = 'Small';
    $item6->description = 'Lorem impsum text is for sample.';
    $item6->price = '$10.99';
    $item6->image = '/propane_grill_images/smokehollow-tabletop.jpg';
    $item6->save();

    $item7 = new App\Item();
    $item7->item_category_id = 'propane_grill';
    $item7->manufacturer_id = 'Smoke Hollow';
    $item7->model_number = 'Four Burner';
    $item7->size = 'Large';
    $item7->description = 'Lorem impsum text is for sample.';
    $item7->price = '$26.99';
    $item7->image = '/propane_grill_images/smokehollow4burner.jpg';
    $item7->save();

    $item8 = new App\Item();
    $item8->item_category_id = 'propane_grill';
    $item8->manufacturer_id = 'Nexgrill';
    $item8->model_number = 'Two Burner';
    $item8->size = 'Small';
    $item8->description = 'Lorem impsum text is for sample.';
    $item8->price = '$18.00';
    $item8->image = '/propane_grill_images/nexgrill2burner.jpg';
    $item8->save();

    $item9 = new App\Item();
    $item9->item_category_id = 'propane_grill';
    $item9->manufacturer_id = 'Nexgrill';
    $item9->model_number = 'Four Burner';
    $item9->size = 'Medium';
    $item9->description = 'Lorem impsum text is for sample.';
    $item9->price = '$34.99';
    $item9->image = '/propane_grill_images/nexgrill4burner.jpg';
    $item9->save();

    $item10 = new App\Item();
    $item10->item_category_id = 'propane_grill';
    $item10->manufacturer_id = 'Nexgrill';
    $item10->model_number = 'Five Burner';
    $item10->size = 'Large';
    $item10->description = 'Lorem impsum text is for sample.';
    $item10->price = '$55.00';
    $item10->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item10->save();
}
}