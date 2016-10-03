<?php

namespace FriendZone\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;

use FriendZone\Http\Requests;
use FriendZone\User;

class UsersController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('q');
        $users = User::where('name', 'like', "%{$query}%")->take(100)->get(['name', 'hobby', 'photo']);
        $users = $users->map(function (User $user) {
            return $user->toSearchFormat();
        });

        return response()->json(['data' => $users]);
    }

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
        if ($request->hasFile('photo'))
        	$user->update(['photo' => $request->file('photo')]);
        return redirect()->to('profile');
    }
}
