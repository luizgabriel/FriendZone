<?php

use Illuminate\Database\Seeder;
use FriendZone\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'demo@friendzone.com',
            'password' => \Hash::make('fd2016'),
        ]);

        factory(User::class)->times(10)->create();
    }
}
