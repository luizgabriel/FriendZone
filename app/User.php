<?php

namespace FriendZone;

use Illuminate\Foundation\Auth\User as Authenticatable;
use FriendZone\Post;
use FriendZone\Comment;
use FriendZone\FriendRequest;

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

    public function friendrequests()
    {
        return $this->hasMany(FriendRequest::class);
    }
}
