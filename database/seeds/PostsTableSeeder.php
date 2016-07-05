<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \FriendZone\User::findOrFail(1);
        factory(\FriendZone\Post::class)->times(10)->create(['user_id' => $user->id]);
    }
}
