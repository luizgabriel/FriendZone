<?php

namespace FriendZone\Http\Controllers;

use Illuminate\Http\Request;
use FriendZone\Comment;

use FriendZone\Http\Requests;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment($request->all());
        $comment->user_id = $request->user()->id;
        $comment->save();

        return redirect()->route('posts.show', $comment->post_id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
