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
        $FriendRequest = new FriendRequest($request->all());
        $FriendRequest->sender_id = $request->user()->id;
        $FriendRequest->receiver_id = $request->user()->id;
        $FriendRequest->save();

        return redirect()->route('/profile/{$user()->id}');
    }

    public function destroy(FriendRequest $FriendRequest)
    {
        FriendRequest::destroy($FriendRequest);
        return redirect()->route('friendrequests.index');
    }
}
