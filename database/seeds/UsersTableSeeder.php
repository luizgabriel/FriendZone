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
        $pass = \Hash::make('fd2016');
        User::create([
            'name' => 'Administrator',
            'email' => 'demo@friendzone.com',
            'password' => $pass,
        ]);

        factory(User::class)->times(10)->create(['password' => $pass]);
    }
}
