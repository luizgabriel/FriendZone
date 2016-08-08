<?php

namespace FriendZone\Http\Controllers;

use Illuminate\Http\Request;

use FriendZone\Http\Requests;

class FriendsController extends Controller
{

    public function index()
    {
        $user = \Auth::user();
        $friends = $user->friends;
        return view('friends.index', ['user' => $user, 'friends' => $friends ]);
    }


}
