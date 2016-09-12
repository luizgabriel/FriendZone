<?php

namespace FriendZone;

use FriendZone\FriendRequest;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\User as Authenticatable;
use FriendZone\Post;
use FriendZone\Comment;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friendships', 'user_id', 'friend_id')->withTimestamps();
    }

    public function sentFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'sender_id');
    }

    public function receivedFriendRequests()
    {
        return $this->hasMany(FriendRequest::class, 'receiver_id');
    }

    public function sendFriendRequestTo($user_id)
    {
        return $this->sentFriendRequests()->create([
            'receiver_id' => $user_id
        ]);
    }
    
    public function hasAlreadySentFriendRequestTo($receiver_id)
    {
        return FriendRequest::find($this->id, $receiver_id) != null;
    }

    public function accept($sender)
    {
        return $this->friends()->attach($sender);
    }
}
