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
        $this->command->info('Users table seeded!');

        $this->call(ItemsTableSeeder::class);
        $this->command->info('Items table seeded!');

        $this->call(OrdersTableSeeder::class);
        $this->command->info('Orders Table seeded!');

        $this->call(OrderItemTableSeeder::class);
        $this->command->info('Order Item table seeded!');

        Model::reguard();
    }
}
