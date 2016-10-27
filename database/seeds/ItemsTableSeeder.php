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
    $item10->manufacturer_id = 3;
    $item10->model = 'Five Burner';
    $item10->size = 'Large';
    $item10->description = 'Lorem impsum text is for sample.';
    $item10->price = 435.75;
    $item10->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item10->save();

    $item11 = new App\Item();
    $item11->item_category_id = 1;
    $item11->manufacturer_id = 3;
    $item11->model = 'Five Burner';
    $item11->size = 'Large';
    $item11->description = 'Lorem impsum text is for sample.';
    $item11->price = 435.75;
    $item11->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item11->save();

    $item12 = new App\Item();
    $item12->item_category_id = 1;
    $item12->manufacturer_id = 3;
    $item12->model = 'Five Burner';
    $item12->size = 'Large';
    $item12->description = 'Lorem impsum text is for sample.';
    $item12->price = 435.75;
    $item12->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item12->save();

    $item13 = new App\Item();
    $item13->item_category_id = 1;
    $item13->manufacturer_id = 3;
    $item13->model = 'Five Burner';
    $item13->size = 'Large';
    $item13->description = 'Lorem impsum text is for sample.';
    $item13->price = 435.75;
    $item13->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item13->save();

    $item14 = new App\Item();
    $item14->item_category_id = 1;
    $item14->manufacturer_id = 4;
    $item14->model = 'Five Burner';
    $item14->size = 'Large';
    $item14->description = 'Lorem impsum text is for sample.';
    $item14->price = 435.75;
    $item14->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item14->save();

    $item15 = new App\Item();
    $item15->item_category_id = 1;
    $item15->manufacturer_id = 4;
    $item15->model = 'Five Burner';
    $item15->size = 'Large';
    $item15->description = 'Lorem impsum text is for sample.';
    $item15->price = 435.75;
    $item15->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item15->save();

    $item16 = new App\Item();
    $item16->item_category_id = 1;
    $item16->manufacturer_id = 4;
    $item16->model = 'Five Burner';
    $item16->size = 'Large';
    $item16->description = 'Lorem impsum text is for sample.';
    $item16->price = 435.75;
    $item16->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item16->save();

    $item17 = new App\Item();
    $item17->item_category_id = 1;
    $item17->manufacturer_id = 4;
    $item17->model = 'Five Burner';
    $item17->size = 'Large';
    $item17->description = 'Lorem impsum text is for sample.';
    $item17->price = 435.75;
    $item17->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item17->save();

    $item18 = new App\Item();
    $item18->item_category_id = 1;
    $item18->manufacturer_id = 4;
    $item18->model = 'Five Burner';
    $item18->size = 'Large';
    $item18->description = 'Lorem impsum text is for sample.';
    $item18->price = 435.75;
    $item18->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item18->save();

    $item19 = new App\Item();
    $item19->item_category_id = 1;
    $item19->manufacturer_id = 4;
    $item19->model = 'Five Burner';
    $item19->size = 'Large';
    $item19->description = 'Lorem impsum text is for sample.';
    $item19->price = 435.75;
    $item19->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item19->save();

    $item20 = new App\Item();
    $item20->item_category_id = 1;
    $item20->manufacturer_id = 4;
    $item20->model = 'Five Burner';
    $item20->size = 'Large';
    $item20->description = 'Lorem impsum text is for sample.';
    $item20->price = 435.75;
    $item20->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item20->save();

    $item21 = new App\Item();
    $item21->item_category_id = 1;
    $item21->manufacturer_id = 4;
    $item21->model = 'Five Burner';
    $item21->size = 'Large';
    $item21->description = 'Lorem impsum text is for sample.';
    $item21->price = 435.75;
    $item21->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item21->save();

    $item22 = new App\Item();
    $item22->item_category_id = 1;
    $item22->manufacturer_id = 4;
    $item22->model = 'Five Burner';
    $item22->size = 'Large';
    $item22->description = 'Lorem impsum text is for sample.';
    $item22->price = 435.75;
    $item22->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item22->save();

    $item23 = new App\Item();
    $item23->item_category_id = 1;
    $item23->manufacturer_id = 4;
    $item23->model = 'Five Burner';
    $item23->size = 'Large';
    $item23->description = 'Lorem impsum text is for sample.';
    $item23->price = 435.75;
    $item23->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item23->save();

    $item24 = new App\Item();
    $item24->item_category_id = 1;
    $item24->manufacturer_id = 4;
    $item24->model = 'Five Burner';
    $item24->size = 'Large';
    $item24->description = 'Lorem impsum text is for sample.';
    $item24->price = 435.75;
    $item24->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item24->save();

    $item25 = new App\Item();
    $item25->item_category_id = 1;
    $item25->manufacturer_id = 4;
    $item25->model = 'Five Burner';
    $item25->size = 'Large';
    $item25->description = 'Lorem impsum text is for sample.';
    $item25->price = 435.75;
    $item25->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item25->save();

    $item26 = new App\Item();
    $item26->item_category_id = 1;
    $item26->manufacturer_id = 4;
    $item26->model = 'Five Burner';
    $item26->size = 'Large';
    $item26->description = 'Lorem impsum text is for sample.';
    $item26->price = 435.75;
    $item26->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item26->save();

    $item27 = new App\Item();
    $item27->item_category_id = 1;
    $item27->manufacturer_id = 4;
    $item27->model = 'Five Burner';
    $item27->size = 'Large';
    $item27->description = 'Lorem impsum text is for sample.';
    $item27->price = 435.75;
    $item27->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item27->save();


    $item28 = new App\Item();
    $item28->item_category_id = 1;
    $item28->manufacturer_id = 4;
    $item28->model = 'Five Burner';
    $item28->size = 'Large';
    $item28->description = 'Lorem impsum text is for sample.';
    $item28->price = 435.75;
    $item28->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item28->save();


    $item29 = new App\Item();
    $item29->item_category_id = 1;
    $item29->manufacturer_id = 4;
    $item29->model = 'Five Burner';
    $item29->size = 'Large';
    $item29->description = 'Lorem impsum text is for sample.';
    $item29->price = 435.75;
    $item29->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item29->save();


    $item30 = new App\Item();
    $item30->item_category_id = 1;
    $item30->manufacturer_id = 4;
    $item30->model = 'Five Burner';
    $item30->size = 'Large';
    $item30->description = 'Lorem impsum text is for sample.';
    $item30->price = 435.75;
    $item30->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item30->save();

    $item31 = new App\Item();
    $item31->item_category_id = 1;
    $item31->manufacturer_id = 4;
    $item31->model = 'Five Burner';
    $item31->size = 'Large';
    $item31->description = 'Lorem impsum text is for sample.';
    $item31->price = 435.75;
    $item31->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item31->save();

    $item32 = new App\Item();
    $item32->item_category_id = 1;
    $item32->manufacturer_id = 4;
    $item32->model = 'Five Burner';
    $item32->size = 'Large';
    $item32->description = 'Lorem impsum text is for sample.';
    $item32->price = 435.75;
    $item32->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item32->save();

    $item33 = new App\Item();
    $item33->item_category_id = 1;
    $item33->manufacturer_id = 4;
    $item33->model = 'Five Burner';
    $item33->size = 'Large';
    $item33->description = 'Lorem impsum text is for sample.';
    $item33->price = 435.75;
    $item33->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item33->save();

    $item34 = new App\Item();
    $item34->item_category_id = 1;
    $item34->manufacturer_id = 4;
    $item34->model = 'Five Burner';
    $item34->size = 'Large';
    $item34->description = 'Lorem impsum text is for sample.';
    $item34->price = 435.75;
    $item34->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item34->save();

    $item35 = new App\Item();
    $item35->item_category_id = 1;
    $item35->manufacturer_id = 4;
    $item35->model = 'Five Burner';
    $item35->size = 'Large';
    $item35->description = 'Lorem impsum text is for sample.';
    $item35->price = 435.75;
    $item35->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item35->save();

    $item36 = new App\Item();
    $item36->item_category_id = 1;
    $item36->manufacturer_id = 4;
    $item36->model = 'Five Burner';
    $item36->size = 'Large';
    $item36->description = 'Lorem impsum text is for sample.';
    $item36->price = 435.75;
    $item36->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item36->save();

    $item37 = new App\Item();
    $item37->item_category_id = 1;
    $item37->manufacturer_id = 4;
    $item37->model = 'Five Burner';
    $item37->size = 'Large';
    $item37->description = 'Lorem impsum text is for sample.';
    $item37->price = 435.75;
    $item37->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item37->save();

    $item38 = new App\Item();
    $item38->item_category_id = 1;
    $item38->manufacturer_id = 4;
    $item38->model = 'Five Burner';
    $item38->size = 'Large';
    $item38->description = 'Lorem impsum text is for sample.';
    $item38->price = 435.75;
    $item38->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item38->save();

    $item39 = new App\Item();
    $item39->item_category_id = 1;
    $item39->manufacturer_id = 4;
    $item39->model = 'Five Burner';
    $item39->size = 'Large';
    $item39->description = 'Lorem impsum text is for sample.';
    $item39->price = 435.75;
    $item39->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item39->save();

    $item40 = new App\Item();
    $item40->item_category_id = 1;
    $item40->manufacturer_id = 4;
    $item40->model = 'Five Burner';
    $item40->size = 'Large';
    $item40->description = 'Lorem impsum text is for sample.';
    $item40->price = 435.75;
    $item40->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item40->save();

    $item41 = new App\Item();
    $item41->item_category_id = 1;
    $item41->manufacturer_id = 4;
    $item41->model = 'Five Burner';
    $item41->size = 'Large';
    $item41->description = 'Lorem impsum text is for sample.';
    $item41->price = 435.75;
    $item41->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item41->save();

    $item42 = new App\Item();
    $item42->item_category_id = 1;
    $item42->manufacturer_id = 4;
    $item42->model = 'Five Burner';
    $item42->size = 'Large';
    $item42->description = 'Lorem impsum text is for sample.';
    $item42->price = 435.75;
    $item42->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item42->save();

    $item43 = new App\Item();
    $item43->item_category_id = 1;
    $item43->manufacturer_id = 4;
    $item43->model = 'Five Burner';
    $item43->size = 'Large';
    $item43->description = 'Lorem impsum text is for sample.';
    $item43->price = 435.75;
    $item43->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item43->save();

    $item44 = new App\Item();
    $item44->item_category_id = 1;
    $item44->manufacturer_id = 4;
    $item44->model = 'Five Burner';
    $item44->size = 'Large';
    $item44->description = 'Lorem impsum text is for sample.';
    $item44->price = 435.75;
    $item44->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item44->save();

    $item45 = new App\Item();
    $item45->item_category_id = 1;
    $item45->manufacturer_id = 4;
    $item45->model = 'Five Burner';
    $item45->size = 'Large';
    $item45->description = 'Lorem impsum text is for sample.';
    $item45->price = 435.75;
    $item45->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item45->save();

    $item46 = new App\Item();
    $item46->item_category_id = 1;
    $item46->manufacturer_id = 4;
    $item46->model = 'Five Burner';
    $item46->size = 'Large';
    $item46->description = 'Lorem impsum text is for sample.';
    $item46->price = 435.75;
    $item46->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item46->save();

    $item47 = new App\Item();
    $item47->item_category_id = 1;
    $item47->manufacturer_id = 4;
    $item47->model = 'Five Burner';
    $item47->size = 'Large';
    $item47->description = 'Lorem impsum text is for sample.';
    $item47->price = 435.75;
    $item47->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item47->save();

    $item48 = new App\Item();
    $item48->item_category_id = 1;
    $item48->manufacturer_id = 4;
    $item48->model = 'Five Burner';
    $item48->size = 'Large';
    $item48->description = 'Lorem impsum text is for sample.';
    $item48->price = 435.75;
    $item48->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item48->save();

    $item49 = new App\Item();
    $item49->item_category_id = 1;
    $item49->manufacturer_id = 4;
    $item49->model = 'Five Burner';
    $item49->size = 'Large';
    $item49->description = 'Lorem impsum text is for sample.';
    $item49->price = 435.75;
    $item49->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item49->save();

    $item50 = new App\Item();
    $item50->item_category_id = 1;
    $item50->manufacturer_id = 4;
    $item50->model = 'Five Burner';
    $item50->size = 'Large';
    $item50->description = 'Lorem impsum text is for sample.';
    $item50->price = 435.75;
    $item50->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item50->save();

    $item51 = new App\Item();
    $item51->item_category_id = 1;
    $item51->manufacturer_id = 4;
    $item51->model = 'Five Burner';
    $item51->size = 'Large';
    $item51->description = 'Lorem impsum text is for sample.';
    $item51->price = 435.75;
    $item51->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item51->save();

    $item52 = new App\Item();
    $item52->item_category_id = 1;
    $item52->manufacturer_id = 4;
    $item52->model = 'Five Burner';
    $item52->size = 'Large';
    $item52->description = 'Lorem impsum text is for sample.';
    $item52->price = 435.75;
    $item52->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item52->save();

    $item53 = new App\Item();
    $item53->item_category_id = 1;
    $item53->manufacturer_id = 4;
    $item53->model = 'Five Burner';
    $item53->size = 'Large';
    $item53->description = 'Lorem impsum text is for sample.';
    $item53->price = 435.75;
    $item53->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item53->save();

    $item54 = new App\Item();
    $item54->item_category_id = 1;
    $item54->manufacturer_id = 4;
    $item54->model = 'Five Burner';
    $item54->size = 'Large';
    $item54->description = 'Lorem impsum text is for sample.';
    $item54->price = 435.75;
    $item54->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item54->save();

    $item55 = new App\Item();
    $item55->item_category_id = 1;
    $item55->manufacturer_id = 4;
    $item55->model = 'Five Burner';
    $item55->size = 'Large';
    $item55->description = 'Lorem impsum text is for sample.';
    $item55->price = 435.75;
    $item55->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item55->save();

    $item56 = new App\Item();
    $item56->item_category_id = 1;
    $item56->manufacturer_id = 4;
    $item56->model = 'Five Burner';
    $item56->size = 'Large';
    $item56->description = 'Lorem impsum text is for sample.';
    $item56->price = 435.75;
    $item56->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item56->save();

    $item57 = new App\Item();
    $item57->item_category_id = 1;
    $item57->manufacturer_id = 4;
    $item57->model = 'Five Burner';
    $item57->size = 'Large';
    $item57->description = 'Lorem impsum text is for sample.';
    $item57->price = 435.75;
    $item57->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item57->save();

    $item58 = new App\Item();
    $item58->item_category_id = 1;
    $item58->manufacturer_id = 4;
    $item58->model = 'Five Burner';
    $item58->size = 'Large';
    $item58->description = 'Lorem impsum text is for sample.';
    $item58->price = 435.75;
    $item58->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item58->save();
















}
}