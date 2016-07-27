<?php

namespace FriendZone\Http\Controllers;

use Illuminate\Http\Request;

use FriendZone\Http\Requests;
use FriendZone\User;

class UserController extends Controller
{
	public function index()
	{

	}

	public function show($id)
    {
        if (is_null($id))
        {
            $id = $user->id;
        }
        return view('users.profile', ['user' => User::findOrFail($id)]);
    }

    public function updateProfile($id)
    {
    	
    }
}
