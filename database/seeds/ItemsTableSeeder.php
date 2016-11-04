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
    $item1->description = "You'll love cooking up a storm on this glamorous grilling stunner. The Genesis E series gas grill comes fully equipped with front-mounted control knobs, porcelain-enameled cast-iron cooking grates, and porcelain-enameled Flavorizer bars to effectively hold and distribute heat as you grill. Now your skills can rival those of the world's greatest restaurants and steak houses.";
    $item1->price = 699.00;
    $item1->image = '/propane_grill_images/webergenesis310.jpg';
    $item1->save();

    $item2 = new App\Item();
    $item2->item_category_id = 1;
    $item2->manufacturer_id = 1;
    $item2->model = 'Spirit 210';
    $item2->size = 'Small';
    $item2->description = 'One great grill with infinite cooking possibilities. This versatile Weber Spirit E-210 GBS (Gourmet BBQ System) gas grill is sold complete with porcelain-enameled cast-iron grates and a large porcelain-enameled cast-iron griddle. With the grate system in place, a generous surface area allows for classic grilling or your favorite foods. But when you want to push the boundaries of what it means to grill, remove the 12 in. center grate and drop in your griddle. Now anything you can prepare in a skillet on a stovetop, you can cook in the griddle on your grill - with authentic grilled flavor.';
    $item2->price = 399.99;
    $item2->image = '/propane_grill_images/weberspirit210.jpg';
    $item2->save();

    $item3 = new App\Item();
    $item3->item_category_id = 1;
    $item3->manufacturer_id = 1;
    $item3->model = 'Summitt S-420';
    $item3->size = 'Large';
    $item3->description = "The 4 main burners on the Summit S-420 4-Burner Gas Grill provide 48,800 BTUs of grilling heat and performance. The grill's 538 sq. in. primary cooking area and 112 sq. in. warming-rack combine to provide 650 sq. in. of total cooking space. The manual-ignition grill features a flush-mounted side burner that can be used to prepare tasty side dishes. Mounted on wheels, the grill can be easily moved around your porch or patio.";
    $item3->price = 1499.00;
    $item3->image = '/propane_grill_images/webersummitt420.jpg';
    $item3->save();

    $item4 = new App\Item();
    $item4->item_category_id = 1;
    $item4->manufacturer_id = 1;
    $item4->model = 'Summitt 670';
    $item4->size = 'Large';
    $item4->description = "The Weber Summit E-670 6-Burner Liquid Propane Grill features the Tuck-Away rotisserie burner with 10,600 BTU/hr. input of infrared heat, a flip-up motor and separate spit and fork storage area in the cart. The tank storage area and LED tank scale are enclosed for a more aesthetic appearance and polished trim and smooth lines are beautiful and elegant.";
    $item4->price = 2449.00;
    $item4->image = '/propane_grill_images/webersummitt670.jpg';
    $item4->save();


// Smoke Hollow Propane
    $item5 = new App\Item();
    $item5->item_category_id = 1;
    $item5->manufacturer_id = 10;
    $item5->model = 'LS2016-2';
    $item5->size = 'Small';
    $item5->description = "The Smoke Hollow 2-Burner LP Gas Barrel grill offers 285 sq. in. of cooking surface, the perfect size for any backyard event. Two 7500 BTU stainless steel burners deliver the perfect amount of heat for hamburger, steak, fish or chicken. Porcelain coated wire cooking grids and heat tents provide a durable and long lasting cooking surface.";
    $item5->price = 105.75;
    $item5->image = '/propane_grill_images/smokehollow2burner.jpg';
    $item5->save();

    $item6 = new App\Item();
    $item6->item_category_id = 1;
    $item6->manufacturer_id = 10;
    $item6->model = 'TT250 Tabletop Liquid Propane Grill';
    $item6->size = 'Small';
    $item6->description = 'The 250 square inch Smoke Hollow portable grill is perfect for the home, camping or tailgating before the big game. The grill features a 10,000 BTU stainless steel burner with heat tent for perfect grilling temps and even heat distribution. For easy storage and portability the grill has two folding legs and a locking hood.';
    $item6->price = 62.25;
    $item6->image = '/propane_grill_images/smokehollow-tabletop.jpg';
    $item6->save();

    $item7 = new App\Item();
    $item7->item_category_id = 1;
    $item7->manufacturer_id = 10;
    $item7->model = 'LS2418-4';
    $item7->size = 'Medium';
    $item7->description = "The Smoke Hollow 4-Burner LP Gas Grill offers 539 sq. in. of total cooking area, the perfect size for any backyard grilling event. The independently controlled 4-burner system delivers 30,000 BTU's of cooking heat in the main cooking surface, and also includes a 10,000 BTU independently controlled side burner. Porcelain coated cast iron cooking grids and heat tents give the grill a durable and long lasting cooking surface. The chrome plated warming rack gives the user an additional heated holding area. It also features the right side of the grill includes a large side table for additional work space.";
    $item7->price = 167.25;
    $item7->image = '/propane_grill_images/smokehollow4burner.jpg';
    $item7->save();


// Nexgrill Propane
    $item8 = new App\Item();
    $item8->item_category_id = 1;
    $item8->manufacturer_id = 4;
    $item8->model = '720-0864';
    $item8->size = 'Small';
    $item8->description = "The Nexgrill 2-Burner Propane Gas Grill has a small footprint and foldable side shelves that make it perfect for the griller with limited outdoor space. It is built with corrosion-resistant materials and boasts a 426 sq. in. cooking area with 28,000 BTUs of fire-roasting energy. The firebox is equipped with two porcelain cast-iron cooking grids including an upper-level warming rack that offers space to heat buns or keep foods toasty. Electronic ignition allows it to fire up instantly and the built-in thermometer enables precise temperature regulation.";
    $item8->price = 159.75;
    $item8->image = '/propane_grill_images/nexgrill2burner.jpg';
    $item8->save();

    $item9 = new App\Item();
    $item9->item_category_id = 1;
    $item9->manufacturer_id = 4;
    $item9->model = '720-0925';
    $item9->size = 'Medium';
    $item9->description = 'This Nexgrill gas grill is built with stainless steel and porcelain coated steel material. With 562 sq. in. total cooking surface over porcelain cast-iron cooking grids, this grill offers plenty of grilling space. Even-Heat system with stainless steel burners angled flame tamers and enhanced grates work together to distribute consistent heat across the entire grill surface and reduce flare-ups.';
    $item9->price = 165.00;
    $item9->image = '/propane_grill_images/nexgrill4burner.jpg';
    $item9->save();

    $item10 = new App\Item();
    $item10->item_category_id = 1;
    $item10->manufacturer_id = 4;
    $item10->model = '720-0896';
    $item10->size = 'Large';
    $item10->description = "The Nexgrill Deluxe 5-Burner Gas Grill offers 768 sq. in. of total cooking space with a searing zone built into the primary grilling area and a 12,000 BTU side burner. It is equipped with porcelain-coated cast iron cooking grates that retain heat exceptionally well and features an upper-level porcelain-coated warming rack that keeps foods toasty. Perched above the burners are angled flame tamers that deflect heat, prevent flare-ups and vaporize drippings into flavor infusions that permeate foods with a distinctive smoky taste. This Even-Heat System distributes consistent and uniform heat across the entire grill surface so there aren't any hot spots. Electronic ignition allows burners to fire up instantly and the built-in thermometer enables precise temperature regulation.";
    $item10->price = 299.00;
    $item10->image = '/propane_grill_images/nexgrill5burner.jpg';
    $item10->save();


// Napoleon Propane
    $item11 = new App\Item();
    $item11->item_category_id = 1;
    $item11->manufacturer_id = 3;
    $item11->model = 'Prestige PRO 665';
    $item11->size = 'Large';
    $item11->description = 'The new Prestige PRO Series PRO665RSIB Gas Grill comes with 8 burners in total, and can grill up to 42 hamburgers at once. That’s not those wimpy, freezer burned, store bought ones, but large and juicy, hand made, 4-inch patties. But you’re grilling on a PRO Series grill. You’re not going to be making burgers, unless you’re hosting the most amazing block party ever. You’re going to be grilling gourmet meals on the 9.5 - millimeter, stainless steel Wave cooking grids. While you’re busy grilling up the perfect steak, or slow grilling the perfect roast, you can cook amazing side dishes on the ceramic infrared side burner. Not just for quickly searing the perfect steak, the ceramic brick heats to 1,800°F in just over 30 seconds and can be used to make sauces, boil water, and even sauté.';
    $item11->price = 3299.00;
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
    $item35->model = 'Pro Series 500';
    $item35->size = 'Medium';
    $item35->description = 'Medium size KitchenAid';
    $item35->price = 331.38;
    $item35->image = '/charcoal_grill_images/kitchenaid_charcoal.jpg';
    $item35->save();

// Green Egg Charcoal
    $item37 = new App\Item();
    $item37->item_category_id = 2;
    $item37->manufacturer_id = 5;
    $item37->model = 'Big Egg';
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
    $item40->model = "Farmer's Charcoal Grill and Off-Set Smoker";
    $item40->size = 'Large';
    $item40->description = "Farmers Charcoal Grill is an excellent addition to everyone's backyard cooking arsenal. It has an oversized side box for loading up with wood chips to provide that great smoke taste flavor or you can just use it for extra cooking space. This grill's size and performance will satisfy your grilling/smoking needs.";
    $item40->price = 479.99;
    $item40->image = '/charcoal_grill_images/rivergrille_charcoal.jpg';
    $item40->save();

// Stok
    $item41 = new App\Item();
    $item41->item_category_id = 2;
    $item41->manufacturer_id = 13;
    $item41->model = 'Drum';
    $item41->size = 'Small';
    $item41->description = 'The STOK Drum allows you to do more with charcoal using the Interchangeable STOK Insert System. The Drum is the first of its kind in the industry with unique innovations that will change the way you grill, allowing you to change the grill grate to any STOK Insert such as a pizza stone, smoker, veggie tray and much more. Also included is a ceramic pizza stone as well as an insert removal tool. Not just a new grill, but a new way to grill. STOK - Ignite your imagination.';
    $item41->price = 129.99;
    $item41->image = '/charcoal_grill_images/stok_charcoal.jpg';
    $item41->save();

// Kingsford
    $item42 = new App\Item();
    $item42->item_category_id = 2;
    $item42->manufacturer_id = 12;
    $item42->model = 'Maverick';
    $item42->size = '';
    $item42->description = 'The Kingsford Maverick 37.5" barrel grill has a 40 burger capacity. The grill is built of heavy duty construction, with durable cast iron cooking grates. It comes with a side and front shelves and bottom storage rack. Also wheels for easy transport.';
    $item42->price = 199.00;
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
    $item46->model = 'Performer Deluxe 22"';
    $item46->size = 'Large';
    $item46->description = "Get the same high-performance kettle grill that is synonymous with the Weber name, now outfitted with a heavy duty steel cart, push-button ignition system, side table, charcoal bin and LCD timer. The Weber Performer Deluxe 22 in. charcoal grill in black also boasts the Tuck-Away lid holder that acts as a pair of extra hands to cradle the lid while you tend to the main course. The cooking platform is a 363 sq. in. Gourmet BBQ System hinged cooking grate with a removable center section that accommodates separately-sold Weber cooking components. After you have feasted on a finger-licking meal, simply pivot the three damper blades in the kettle basin to funnel charcoal dust into the removable ash catcher underneath.";
    $item46->price = 398.90;
    $item46->image = '/charcoal_grill_images/weber_small_table.jpg';
    $item46->save();

// Tool-set
    $item47 = new App\Item();
    $item47->item_category_id = 3;
    $item47->manufacturer_id = 1;
    $item47->model = 'Weber Tool Set';
    $item47->size = 'Small';
    $item47->description = '3-Piece Stainless Steel Grill Tool Set';
    $item47->price = 29.99;
    $item47->image = '/grillsupplies_images/weberToolSet.jpeg';
    $item47->save();

// Table
    $item48 = new App\Item();
    $item48->item_category_id = 4;
    $item48->manufacturer_id = 8;
    $item48->model = 'Folding Table';
    $item48->size = 'Large';
    $item48->description = '6 ft. Folding Utility Table';
    $item48->price = 89.99;
    $item48->image = '/partysupplies_images/foldingTable.jpg';
    $item48->save();

// Chair
    $item49 = new App\Item();
    $item49->item_category_id = 5;
    $item49->manufacturer_id = 8;
    $item49->model = 'Folding Chairs';
    $item49->size = 'Medium';
    $item49->description = 'Folding Chairs (4-Pack)';
    $item49->price = 47.37;
    $item49->image = '/partysupplies_images/foldingChair.jpg';
    $item49->save();

// Utensils
    $item50 = new App\Item();
    $item50->item_category_id = 6;
    $item50->manufacturer_id = 8;
    $item50->model = 'Utensils';
    $item50->size = 'Small';
    $item50->description = 'Clear 96 Plastic Spoons, Forks, And Knives';
    $item50->price = 21.89;
    $item50->image = '/partysupplies_images/partyUtensils.jpg';
    $item50->save();

// Skewers
    $item50 = new App\Item();
    $item50->item_category_id = 7;
    $item50->manufacturer_id = 1;
    $item50->model = 'Skewers';
    $item50->size = 'Small';
    $item50->description = 'Set of Siz Stainless Steel Skewers';
    $item50->price = 14.95;
    $item50->image = '/grillsupplies_images/skewer.jpg';
    $item50->save();

// Rotisserie
    $item51 = new App\Item();
    $item51->item_category_id = 8;
    $item51->manufacturer_id = 2;
    $item51->model = 'Rotisserie';
    $item51->size = 'Medium';
    $item51->description = 'Grill Rotisserie';
    $item51->price = 87.99;
    $item51->image = '/grillsupplies_images/rotisserie.jpg';
    $item51->save();

// Planks
    $item52 = new App\Item();
    $item52->item_category_id = 9;
    $item52->manufacturer_id = 8;
    $item52->model = 'Planks';
    $item52->size = 'Medium';
    $item52->description = 'Cedar Grilling Planks (12-Pack)';
    $item52->price = 19.99;
    $item52->image = '/grillsupplies_images/planks.jpg';
    $item52->save();

// Rib-rack
    $item53 = new App\Item();
    $item53->item_category_id = 10;
    $item53->manufacturer_id = 8;
    $item53->model = 'Rib Rack';
    $item53->size = 'Medium';
    $item53->description = 'Rib Rack';
    $item53->price = 19.99;
    $item53->image = '/grillsupplies_images/ribrack.jpg';
    $item53->save();

// Vegetable-basket
    $item54 = new App\Item();
    $item54->item_category_id = 11;
    $item54->manufacturer_id = 8;
    $item54->model = 'Vegetable Basket';
    $item54->size = 'Medium';
    $item54->description = 'Vegetable Basket';
    $item54->price = 25.99;
    $item54->image = '/grillsupplies_images/vegetableBasket.jpg';
    $item54->save();

// Fish-basket
    $item55 = new App\Item();
    $item55->item_category_id = 12;
    $item55->manufacturer_id = 8;
    $item55->model = 'Fish Basket';
    $item55->size = 'Medium';
    $item55->description = 'Fish Basket';
    $item55->price = 12.99;
    $item55->image = '/grillsupplies_images/fishBasket.jpg';
    $item55->save();

// Turf-mat
    $item56 = new App\Item();
    $item56->item_category_id = 13;
    $item56->manufacturer_id = 8;
    $item56->model = 'Grass Turf';
    $item56->size = 'Large';
    $item56->description = 'Grass Turff (15ft x 15ft)';
    $item56->price = 19.99;
    $item56->image = '/partysupplies_images/grassTurf.jpg';
    $item56->save();





}
}
