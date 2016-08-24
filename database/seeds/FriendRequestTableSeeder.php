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
        FriendRequest::create([
        	'sender_id' => 0,
        	'receiver_id' => 0
        ]);
    }
}
