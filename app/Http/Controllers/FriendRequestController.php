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

    public function destroy(FriendRequest $friendRequest)
    {
        FriendRequest::destroy($friendRequest->id);
        return redirect()->route('friendrequests.index');
    }
}
