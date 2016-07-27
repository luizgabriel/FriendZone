<?php

namespace FriendZone\Http\Controllers;

use Illuminate\Http\Request;
use FriendZone\Comment;
use FriendZone\Post;

use FriendZone\Http\Requests;

class CommentsController extends Controller
{
    public function index(Request $request, Post $post)
    {
        $pageSize = $request->get('page_size');
        $page = $request->get('page');
        $comments = $post->comments()->skip($page * $pageSize)->take($pageSize)->get();

        return view('comments.index', compact('comments'));
    }

    public function store(Request $request)
    {
        $comment = new Comment($request->all());
        $comment->user_id = $request->user()->id;
        $comment->save();

        return view('comments.item', compact('comment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);
    }
}
