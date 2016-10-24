<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $user1 = new App\User();
    $user1->email = 'rachel@mail.com';
    $user1->password = Hash::make('abc123');
    $user1->is_admin = 'true';
    $user1->save();

    $user2 = new App\User();
    $user2->email = 'wyatt@mail.com';
    $user2->password = Hash::make('abc123');
    $user2->is_admin = 'true';
    $user2->save();

    $user3 = new App\User();
    $user3->email = 'john@mail.com';
    $user3->password = Hash::make('abc123');
    $user3->is_admin = 'false';
    $user3->save();

    $user4 = new App\User();
    $user4->email = 'sarah@mail.com';
    $user4->password = Hash::make('abc123');
    $user4->is_admin = 'false';
    $user4->save();

    $user5 = new App\User();
    $user5->email = 'mike@mail.com';
    $user5->password = Hash::make('abc123');
    $user5->is_admin = 'false';
    $user5->save();

    $user6 = new App\User();
    $user6->email = 'jane@mail.com';
    $user6->password = Hash::make('abc123');
    $user6->is_admin = 'false';
    $user6->save();

    $user7 = new App\User();
    $user7->email = 'bob@mail.com';
    $user7->password = Hash::make('abc123');
    $user7->is_admin = 'false';
    $user7->save();

    $user8 = new App\User();
    $user8->email = 'chris@mail.com';
    $user8->password = Hash::make('abc123');
    $user8->is_admin = 'false';
    $user8->save();

    $user9 = new App\User();
    $user9->email = 'jennifer@mail.com';
    $user9->password = Hash::make('abc123');
    $user9->is_admin = 'false';
    $user9->save();

    $user10 = new App\User();
    $user10->email = 'mary@mail.com';
    $user10->password = Hash::make('abc123');
    $user10->is_admin = 'false';
    $user10->save();
}
}