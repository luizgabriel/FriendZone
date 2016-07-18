<?php

namespace FriendZone\Http\Controllers;

use FriendZone\Post;
use Illuminate\Http\Request;
use FriendZone\Http\Requests;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = new Post($request->all());
        $post->user_id = $request->user()->id;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
