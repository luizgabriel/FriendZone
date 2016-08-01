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
        for ($i = 0; $i < 10; $i++) {
            $user = factory(\FriendZone\User::class)->create();
            factory(\FriendZone\Post::class)->create(['user_id' => $user->id]);
        }

        foreach (\FriendZone\Post::all() as $post) {
            for ($j = 0; $j < random_int(0, 8); $j++) {
                $commenter = \FriendZone\User::inRandomOrder()->first();
                factory(\FriendZone\Comment::class)->create(['post_id' => $post->id, 'user_id' => $commenter->id]);
            }
        }
    }
}
