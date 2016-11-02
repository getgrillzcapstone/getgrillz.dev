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

// Weber Propane
    $item1 = new App\Item();
    $item1->item_category_id = 1;
    $item1->manufacturer_id = 1;
    $item1->model = 'Genesis 310';
    $item1->size = 'Medium';
    $item1->description = 'Medium size Genesis 310';
    $item1->price = 699.99;
    $item1->image = '/propane_grill_images/webergenesis310.jpg';
    $item1->save();

    $item2 = new App\Item();
    $item2->item_category_id = 1;
    $item2->manufacturer_id = 1;
    $item2->model = 'Spirit 210';
    $item2->size = 'Small';
    $item2->description = 'Small size Spirit 210';
    $item2->price = 399.99;
    $item2->image = '/propane_grill_images/weberspirit210.jpg';
    $item2->save();

    $item3 = new App\Item();
    $item3->item_category_id = 1;
    $item3->manufacturer_id = 1;
    $item3->model = 'Summitt 420';
    $item3->size = 'Large';
    $item3->description = 'Large size Summitt 420';
    $item3->price = 999.99;
    $item3->image = '/propane_grill_images/webersummitt420.jpg';
    $item3->save();

    $item4 = new App\Item();
    $item4->item_category_id = 1;
    $item4->manufacturer_id = 1;
    $item4->model = 'Summitt 670';
    $item4->size = 'Large';
    $item4->description = 'Large size Summitt 670';
    $item4->price = 1299.99;
    $item4->image = '/propane_grill_images/webersummitt670.jpg';
    $item4->save();


// Smoke Hollow Propane
    $item5 = new App\Item();
    $item5->item_category_id = 1;
    $item5->manufacturer_id = 10;
    $item5->model = 'Two Burner';
    $item5->size = 'Small';
    $item5->description = 'Small size Two Burner';
    $item5->price = 175.00;
    $item5->image = '/propane_grill_images/smokehollow2burner.jpg';
    $item5->save();

    $item6 = new App\Item();
    $item6->item_category_id = 1;
    $item6->manufacturer_id = 10;
    $item6->model = 'Table Top';
    $item6->size = 'Small';
    $item6->description = 'Small size Table Top';
    $item6->price = 95.00;
    $item6->image = '/propane_grill_images/smokehollow-tabletop.jpg';
    $item6->save();

    $item7 = new App\Item();
    $item7->item_category_id = 1;
    $item7->manufacturer_id = 10;
    $item7->model = 'Four Burner';
    $item7->size = 'Medium';
    $item7->description = 'Medium size Four Burner';
    $item7->price = 375.00;
    $item7->image = '/propane_grill_images/smokehollow4burner.jpg';
    $item7->save();


// Nexgrill Propane
    $item8 = new App\Item();
    $item8->item_category_id = 1;
    $item8->manufacturer_id = 4;
    $item8->model = 'Two Burner';
    $item8->size = 'Small';
    $item8->description = 'Small size Two Burner';
    $item8->price = 189.75;
    $item8->image = '/propane_grill_images/nexgrill2burner.jpg';
    $item8->save();

    $item9 = new App\Item();
    $item9->item_category_id = 1;
    $item9->manufacturer_id = 4;
    $item9->model = 'Four Burner';
    $item9->size = 'Medium';
    $item9->description = 'Medium size Four Burner';
    $item9->price = 299.00;
    $item9->image = '/propane_grill_images/nexgrill4burner.jpg';
    $item9->save();

    $item10 = new App\Item();
    $item10->item_category_id = 1;
    $item10->manufacturer_id = 4;
    $item10->model = 'Five Burner';
    $item10->size = 'Large';
    $item10->description = 'Large size Five Burner';
    $item10->price = 897.67;
    $item10->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item10->save();


// Napoleon Propane
    $item11 = new App\Item();
    $item11->item_category_id = 1;
    $item11->manufacturer_id = 3;
    $item11->model = 'Eight Burner';
    $item11->size = 'Large';
    $item11->description = 'Large size Eight Burner';
    $item11->price = 902.45;
    $item11->image = '/propane_grill_images/napoleon8burner.jpg';
    $item11->save();

    $item12 = new App\Item();
    $item12->item_category_id = 1;
    $item12->manufacturer_id = 3;
    $item12->model = 'Five Burner';
    $item12->size = 'Large';
    $item12->description = 'Medium size Genesis 310';
    $item12->price = 472.67;
    $item12->image = '/propane_grill_images/napoleon5burner.jpg';
    $item12->save();

    $item13 = new App\Item();
    $item13->item_category_id = 1;
    $item13->manufacturer_id = 3;
    $item13->model = 'Four Burner';
    $item13->size = 'Medium';
    $item13->description = 'Medium size Four Burner';
    $item13->price = 567.23;
    $item13->image = '/propane_grill_images/napoleon4burner.jpg';
    $item13->save();

    $item14 = new App\Item();
    $item14->item_category_id = 1;
    $item14->manufacturer_id = 3;
    $item14->model = 'Three Burner';
    $item14->size = 'Medium';
    $item14->description = 'Medium size Three Burner';
    $item14->price = 442.89;
    $item14->image = '/propane_grill_images/napoleon3burner.jpg';
    $item14->save();

    $item15 = new App\Item();
    $item15->item_category_id = 1;
    $item15->manufacturer_id = 3;
    $item15->model = 'Table Top';
    $item15->size = 'Small';
    $item15->description = 'Small size Table Top';
    $item15->price = 279.23;
    $item15->image = '/propane_grill_images/napoleon-travelq.jpg';
    $item15->save();

    $item16 = new App\Item();
    $item16->item_category_id = 1;
    $item16->manufacturer_id = 3;
    $item16->model = 'Medium Burner';
    $item16->size = 'Medium';
    $item16->description = 'Medium size Medium Burner';
    $item16->price = 532.52;
    $item16->image = '/propane_grill_images/napoleon3burner2.jpg';
    $item16->save();


// Masterbuilt Propane
    $item17 = new App\Item();
    $item17->item_category_id = 1;
    $item17->manufacturer_id = 9;
    $item17->model = 'Propane Smoker';
    $item17->size = 'Medium';
    $item17->description = 'Medium size Propane Smoker';
    $item17->price = 634.29;
    $item17->image = '/propane_grill_images/masterbuilt-propanesmoker.jpg';
    $item17->save();

// KitchenAid Propane
    $item18 = new App\Item();
    $item18->item_category_id = 1;
    $item18->manufacturer_id = 8;
    $item18->model = 'Two Burner';
    $item18->size = 'Small';
    $item18->description = 'Small size Two Burner';
    $item18->price = 271.01;
    $item18->image = '/propane_grill_images/kitchenaid2burner.jpg';
    $item18->save();

    $item19 = new App\Item();
    $item19->item_category_id = 1;
    $item19->manufacturer_id = 8;
    $item19->model = 'Three Burner';
    $item19->size = 'Medium';
    $item19->description = 'Medium size Three Burner';
    $item19->price = 178.58;
    $item19->image = '/propane_grill_images/kitchenaid3burner.jpg';
    $item19->save();

    $item20 = new App\Item();
    $item20->item_category_id = 1;
    $item20->manufacturer_id = 8;
    $item20->model = 'Six Burner';
    $item20->size = 'Large';
    $item20->description = 'Large size Siz Burner';
    $item20->price = 1020.42;
    $item20->image = '/propane_grill_images/kitchenaid6burner.jpg';
    $item20->save();


// Dynaglo Propane
    $item21 = new App\Item();
    $item21->item_category_id = 1;
    $item21->manufacturer_id = 6;
    $item21->model = 'Three Burner';
    $item21->size = 'Medium';
    $item21->description = 'Medium size Three Burner';
    $item21->price = 693.75;
    $item21->image = '/propane_grill_images/dynaglo3burner.jpg';
    $item21->save();

    $item22 = new App\Item();
    $item22->item_category_id = 1;
    $item22->manufacturer_id = 6;
    $item22->model = 'Four Burner';
    $item22->size = 'Medium';
    $item22->description = 'Medium size Four Burner';
    $item22->price = 682.62;
    $item22->image = '/propane_grill_images/dynaglo4burner.jpg';
    $item22->save();

    $item23 = new App\Item();
    $item23->item_category_id = 1;
    $item23->manufacturer_id = 6;
    $item23->model = 'Five Burner';
    $item23->size = 'Large';
    $item23->description = 'Large size Five Burner';
    $item23->price = 892.81;
    $item23->image = '/propane_grill_images/dynaglo5burner.jpg';
    $item23->save();


// Chargriller Propane
    $item24 = new App\Item();
    $item24->item_category_id = 1;
    $item24->manufacturer_id = 7;
    $item24->model = 'Pro Three';
    $item24->size = 'Small';
    $item24->description = 'Small size Pro Three';
    $item24->price = 124.32;
    $item24->image = '/propane_grill_images/chargrillerpro3.jpg';
    $item24->save();


// Charbroil Propane
    $item25 = new App\Item();
    $item25->item_category_id = 1;
    $item25->manufacturer_id = 2;
    $item25->model = 'Bistro';
    $item25->size = 'Small';
    $item25->description = 'Small size Bistro';
    $item25->price = 78.90;
    $item25->image = '/propane_grill_images/charbroil-bistro.jpg';
    $item25->save();

    $item26 = new App\Item();
    $item26->item_category_id = 1;
    $item26->manufacturer_id = 2;
    $item26->model = 'Two Burner';
    $item26->size = 'Small';
    $item26->description = 'Small size Two Burner';
    $item26->price = 120.92;
    $item26->image = '/propane_grill_images/charbroil2burner.jpg';
    $item26->save();

    $item27 = new App\Item();
    $item27->item_category_id = 1;
    $item27->manufacturer_id = 2;
    $item27->model = 'Three Burner';
    $item27->size = 'Medium';
    $item27->description = 'Medium size Three Burner';
    $item27->price = 342.78;
    $item27->image = '/propane_grill_images/charbroil3burner.jpg';
    $item27->save();


    $item28 = new App\Item();
    $item28->item_category_id = 1;
    $item28->manufacturer_id = 2;
    $item28->model = 'Four Burner';
    $item28->size = 'Medium';
    $item28->description = 'Medium size Genesis 310';
    $item28->price = 352.76;
    $item28->image = '/propane_grill_images/charbroil4burner.jpg';
    $item28->save();


    $item29 = new App\Item();
    $item29->item_category_id = 1;
    $item29->manufacturer_id = 2;
    $item29->model = 'Six Burner';
    $item29->size = 'Large';
    $item29->description = 'Large size Six Burner';
    $item29->price = 798.63;
    $item29->image = '/propane_grill_images/charbroil6burner.jpg';
    $item29->save();

// Weber Bistro Propane Table
    $item30 = new App\Item();
    $item30->item_category_id = 1;
    $item30->manufacturer_id = 1;
    $item30->model = 'Bistro';
    $item30->size = 'Small';
    $item30->description = 'Small size Bistro';
    $item30->price = 142.56;
    $item30->image = '/propane_grill_images/weber-bistro.jpg';
    $item30->save();


// Charcoal Grills Below

// Weber Charcoal
    $item31 = new App\Item();
    $item31->item_category_id = 2;
    $item31->manufacturer_id = 1;
    $item31->model = 'Weber Kettle';
    $item31->size = 'Medium';
    $item31->description = 'Medium size Weber Kettle';
    $item31->price = 345.02;
    $item31->image = '/charcoal_grill_images/weber_medium_kettle.jpg';
    $item31->save();

    $item32 = new App\Item();
    $item32->item_category_id = 2;
    $item32->manufacturer_id = 1;
    $item32->model = 'Weber Kettle';
    $item32->size = 'Large';
    $item32->description = 'Large size Weber Kettle';
    $item32->price = 879.56;
    $item32->image = '/charcoal_grill_images/weber_kettle2.jpg';
    $item32->save();

// Masterbuilt Charcoal
    $item33 = new App\Item();
    $item33->item_category_id = 2;
    $item33->manufacturer_id = 9;
    $item33->model = 'Masterbuilt';
    $item33->size = 'Small';
    $item33->description = 'Small size Masterbuilt';
    $item33->price = 231.59;
    $item33->image = '/charcoal_grill_images/masterbuilt.jpg';
    $item33->save();

// Nexgrill Charcoal
    $item34 = new App\Item();
    $item34->item_category_id = 2;
    $item34->manufacturer_id = 4;
    $item34->model = 'Nexgrill';
    $item34->size = 'Small';
    $item34->description = 'Small size Nexgrill';
    $item34->price = 156.43;
    $item34->image = '/charcoal_grill_images/nexgrill_charcoal.jpg';
    $item34->save();

// KitchenAid Charcoal
    $item35 = new App\Item();
    $item35->item_category_id = 2;
    $item35->manufacturer_id = 8;
    $item35->model = 'KitchenAid';
    $item35->size = 'Medium';
    $item35->description = 'Medium size KitchenAid';
    $item35->price = 331.38;
    $item35->image = '/charcoal_grill_images/kitchenaid_charcoal.jpg';
    $item35->save();

// Green Egg Charcoal
    $item37 = new App\Item();
    $item37->item_category_id = 2;
    $item37->manufacturer_id = 5;
    $item37->model = 'Greenegg';
    $item37->size = 'Medium';
    $item37->description = 'Medium size Greenegg';
    $item37->price = 675.43;
    $item37->image = '/charcoal_grill_images/greenegg_medium.jpg';
    $item37->save();

    $item38 = new App\Item();
    $item38->item_category_id = 2;
    $item38->manufacturer_id = 5;
    $item38->model = 'Greenegg';
    $item38->size = 'Large';
    $item38->description = 'Large size Greenegg';
    $item38->price = 943.54;
    $item38->image = '/charcoal_grill_images/greenegg_large.jpg';
    $item38->save();

// Dynaglo Charcoal
    $item39 = new App\Item();
    $item39->item_category_id = 2;
    $item39->manufacturer_id = 6;
    $item39->model = 'Dyna-Glo';
    $item39->size = 'Medium';
    $item39->description = 'Medium size Dyna-Glo';
    $item39->price = 627.73;
    $item39->image = '/charcoal_grill_images/dyna-glo_charcoal.jpg';
    $item39->save();

// Rivergrille
    $item40 = new App\Item();
    $item40->item_category_id = 2;
    $item40->manufacturer_id = 11;
    $item40->model = 'Rivergrille';
    $item40->size = 'Large';
    $item40->description = 'Large size Rivergrille';
    $item40->price = 892.47;
    $item40->image = '/charcoal_grill_images/rivergrille_charcoal.jpg';
    $item40->save();

// Stok
    $item41 = new App\Item();
    $item41->item_category_id = 2;
    $item41->manufacturer_id = 13;
    $item41->model = 'Stok';
    $item41->size = 'Small';
    $item41->description = 'Small size Stok';
    $item41->price = 210.34;
    $item41->image = '/charcoal_grill_images/stok_charcoal.jpg';
    $item41->save();

// Kingsford
    $item42 = new App\Item();
    $item42->item_category_id = 2;
    $item42->manufacturer_id = 12;
    $item42->model = 'Kingsford';
    $item42->size = 'Medium';
    $item42->description = 'Medium size Kingsford';
    $item42->price = 537.95;
    $item42->image = '/charcoal_grill_images/kingsford_charcoal.jpg';
    $item42->save();

// Chargriller
    $item43 = new App\Item();
    $item43->item_category_id = 2;
    $item43->manufacturer_id = 7;
    $item43->model = 'Chargriller';
    $item43->size = 'Small';
    $item43->description = 'Small size Chargriller';
    $item43->price = 341.93;
    $item43->image = '/charcoal_grill_images/chargriller_small.jpg';
    $item43->save();

    $item44 = new App\Item();
    $item44->item_category_id = 2;
    $item44->manufacturer_id = 7;
    $item44->model = 'Chargriller';
    $item44->size = 'Medium';
    $item44->description = 'Medium size Chargriller';
    $item44->price = 678.45;
    $item44->image = '/charcoal_grill_images/chargriller_medium.jpg';
    $item44->save();

    $item45 = new App\Item();
    $item45->item_category_id = 2;
    $item45->manufacturer_id = 7;
    $item45->model = 'Chargriller';
    $item45->size = 'Large';
    $item45->description = 'Large size Chargriller';
    $item45->price = 862.48;
    $item45->image = '/charcoal_grill_images/chargriller_large.jpg';
    $item45->save();

// Weber Small Table
    $item46 = new App\Item();
    $item46->item_category_id = 2;
    $item46->manufacturer_id = 1;
    $item46->model = 'Weber Table';
    $item46->size = 'Large';
    $item46->description = 'Large size Weber Table';
    $item46->price = 920.48;
    $item46->image = '/charcoal_grill_images/weber_small_table.jpg';
    $item46->save();

// Tool-set
    $item46 = new App\Item();
    $item46->item_category_id = 3;
    $item46->manufacturer_id = 1;
    $item46->model = 'Weber Tool Set';
    $item46->size = 'Small';
    $item46->description = '3-Piece Stainless Steel Grill Tool Set';
    $item46->price = 29.99;
    $item46->image = '/grillsupplies_images/weberToolSet.jpeg';
    $item46->save();

// Table
    $item46 = new App\Item();
    $item46->item_category_id = 4;
    $item46->manufacturer_id = 8;
    $item46->model = 'Folding Table';
    $item46->size = 'Large';
    $item46->description = '6 ft. Folding Utility Table';
    $item46->price = 89.99;
    $item46->image = '/partysupplies_images/foldingTable.jpg';
    $item46->save();

// Chair
    $item46 = new App\Item();
    $item46->item_category_id = 5;
    $item46->manufacturer_id = 8;
    $item46->model = 'Folding Chairs';
    $item46->size = 'Medium';
    $item46->description = 'Folding Chairs (4-Pack)';
    $item46->price = 47.37;
    $item46->image = '/partysupplies_images/foldingChair.jpg';
    $item46->save();

// Utensils
    $item46 = new App\Item();
    $item46->item_category_id = 6;
    $item46->manufacturer_id = 8;
    $item46->model = 'Utensils';
    $item46->size = 'Small';
    $item46->description = 'Clear 96 Plastic Spoons, Forks, And Knives';
    $item46->price = 21.89;
    $item46->image = '/partysupplies_images/partyUtensils.jpg';
    $item46->save();

// Skewers
    $item46 = new App\Item();
    $item46->item_category_id = 7;
    $item46->manufacturer_id = 1;
    $item46->model = 'Skewers';
    $item46->size = 'Small';
    $item46->description = 'Set of Siz Stainless Steel Skewers';
    $item46->price = 14.95;
    $item46->image = '/grillsupplies_images/skewer.jpg';
    $item46->save();

// Rotisserie
    $item46 = new App\Item();
    $item46->item_category_id = 8;
    $item46->manufacturer_id = 2;
    $item46->model = 'Rotisserie';
    $item46->size = 'Medium';
    $item46->description = 'Grill Rotisserie';
    $item46->price = 87.99;
    $item46->image = '/grillsupplies_images/rotisserie.jpg';
    $item46->save();

// Planks
    $item46 = new App\Item();
    $item46->item_category_id = 9;
    $item46->manufacturer_id = 8;
    $item46->model = 'Planks';
    $item46->size = 'Medium';
    $item46->description = 'Cedar Grilling Planks (12-Pack)';
    $item46->price = 19.99;
    $item46->image = '/grillsupplies_images/planks.jpg';
    $item46->save();

// Rib-rack
    $item46 = new App\Item();
    $item46->item_category_id = 10;
    $item46->manufacturer_id = 8;
    $item46->model = 'Rib Rack';
    $item46->size = 'Medium';
    $item46->description = 'Rib Rack';
    $item46->price = 19.99;
    $item46->image = '/grillsupplies_images/ribrack.jpg';
    $item46->save();

// Vegetable-basket
    $item46 = new App\Item();
    $item46->item_category_id = 11;
    $item46->manufacturer_id = 8;
    $item46->model = 'Vegetable Basket';
    $item46->size = 'Medium';
    $item46->description = 'Vegetable Basket';
    $item46->price = 25.99;
    $item46->image = '/grillsupplies_images/vegetableBasket.jpg';
    $item46->save();

// Fish-basket
    $item46 = new App\Item();
    $item46->item_category_id = 12;
    $item46->manufacturer_id = 8;
    $item46->model = 'Fish Basket';
    $item46->size = 'Medium';
    $item46->description = 'Fish Basket';
    $item46->price = 12.99;
    $item46->image = '/grillsupplies_images/fishBasket.jpg';
    $item46->save();

// Turf-mat
    $item46 = new App\Item();
    $item46->item_category_id = 13;
    $item46->manufacturer_id = 8;
    $item46->model = 'Grass Turf';
    $item46->size = 'Large';
    $item46->description = 'Grass Turff (15ft x 15ft)';
    $item46->price = 19.99;
    $item46->image = '/partysupplies_images/grassTurf.jpg';
    $item46->save();





}
}
