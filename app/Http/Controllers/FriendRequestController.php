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

    public function answer(User $requester, Request $request)
    {
        if ($request->get('action') == 'accept')
            $request->user()->addFriend($requester);

        return $this->destroy($requester);
    }

    private function destroy(User $requester)
    {
        \Auth::user()->receivedFriendRequests()->detach($requester->id);
        return redirect()->back();
    }
}
