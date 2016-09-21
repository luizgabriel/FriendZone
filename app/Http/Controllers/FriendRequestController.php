<?php

namespace FriendZone\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use FriendZone\Http\Requests;
use FriendZone\FriendRequest;
use FriendZone\User;

class FriendRequestController extends Controller
{

    public function store(Request $request)
    {
        $request->user()->sendFriendRequestTo($request->get('receiver_id'));
        return redirect()->back();
    }

    public function answer(Request $request)
    {
        $sender = User::findOrFail($request->get('sender_id'))
        if ($request->get('action') == 'accept')
            $request->user()->addFriend($sender);

        return $this->destroy($request);
    }

    private function destroy(Request $request)
    {
        \Auth::user()->receivedFriendRequests()->detach($request->get('sender_id'));
        return redirect()->back();
    }
}
