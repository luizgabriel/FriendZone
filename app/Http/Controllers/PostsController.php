<?php

namespace FriendZone\Http\Controllers;

use FriendZone\Post;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use FriendZone\Http\Requests;

class PostsController extends Controller
{
    /** @var \FriendZone\User */
    private $user;

    public function __constructor(Authenticatable $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
