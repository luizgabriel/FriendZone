<?php

namespace FriendZone\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use FriendZone\Http\Requests;
use FriendZone\FriendRequest;

class FriendRequestController extends Controller
{

    public function store(Request $request)
    {
        $request->user()->sendFriendRequestTo($request->get('receiver_id'));
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        \Auth::user()->receivedFriendRequests()->where('sender_id', $request->get('sender_id'))->delete();
        return redirect()->back();
    }

    public function accept(Request $request)
    {
        $request->user()->accept($request->get('sender_id'));
        return $this->destroy($request);
    }

    public function refuse(Request $request)
    {
        return $this->destroy($request);
    }
}
