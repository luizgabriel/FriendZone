<?php

namespace FriendZone\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;

use FriendZone\Http\Requests;
use FriendZone\User;

class UsersController extends Controller
{
	public function profile(Authenticatable $user)
	{
        return $this->show($user);
	}

	public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function updateProfile(Request $request, Authenticatable $user)
    {
        $user->update($request->only(['name', 'hobby']));

        return redirect()->to('profile');
    }
}
