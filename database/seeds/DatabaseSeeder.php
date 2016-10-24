<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);

        $this->call(ItemsTableSeeder::class);

        $this->call(Item_CategoryTableSeeder::class);

        $this->call(ItemManufacturerTableSeeder::class);

        $this->call(OrdersTableSeeder::class);

        $this->call(Order_ItemsTableSeeder::class);

        Model::reguard();
    }
}
