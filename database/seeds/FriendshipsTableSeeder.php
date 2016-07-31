<?php

use Illuminate\Database\Seeder;

class FriendshipsTableSeeder extends Seeder
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
                if ($user->id != $friend->id && random_int(0,1) == 1) {
                	DB::table('friendships')->insert(['user_id' => $user->id, 'friend_id' => $friend->id]);
                }
            }
        }
    }
}
