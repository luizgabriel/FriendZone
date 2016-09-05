<?php

use Illuminate\Database\Seeder;
use FriendZone\FriendRequest;

class FriendRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(\FriendZone\User::all() as $user) {
            foreach (\FriendZone\User::all() as $friend) {
                if ($user->id != $friend->id && random_int(0,5) == 1) {
                    $user->sendFriendRequestTo($friend->id);
                }
            }
        }
    }
}
