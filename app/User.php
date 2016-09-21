<?php

namespace FriendZone;

use Cloudinary\Uploader;
use FriendZone\FriendRequest;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\User as Authenticatable;
use FriendZone\Post;
use FriendZone\Comment;
use Symfony\Component\HttpFoundation\File\File;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'photo', 'hobby'
    ];

    protected $casts = [
        'photo' => 'array',
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
        return $this->belongsToMany(User::class, 'friend_requests', 'sender_id', 'receiver_id')->withTimestamps();
    }

    public function receivedFriendRequests()
    {
        return $this->belongsToMany(User::class, 'friend_requests', 'receiver_id', 'sender_id')->withTimestamps();
    }

    public function sendFriendRequestTo($user_id)
    {
        return $this->sentFriendRequests()->attach($user_id);
    }
    
    public function hasAlreadySentFriendRequestTo($receiver_id)
    {
        return FriendRequest::find($this->id, $receiver_id) != null;
    }

    public function hasFriend($user_id)
    {
        return $this->friends()->find($user_id) != null;
    }

    /**
     * @param int $sender_id
     */
    public function addFriend($sender_id)
    {
        if (!$this->hasFriend($sender_id))
            $this->friends()->attach($sender_id);
    }

    public function setPhotoAttribute($value)
    {
        if ($value instanceof File) {
            try {
                if(!empty($this->attributes['photo']))
                    Uploader::destroy($this->photo['public_id']);

                $this->attributes['photo'] = json_encode(Uploader::upload($value));
            } catch (\Exception $e) { }
        } else {
            $this->attributes['photo'] = $value;
        }
    }

    public function getPhotoUrlAttribute()
    {
        if (empty($this->photo))
            return $this->getRandomProfilePicture();
        else
            return $this->photo['url'];
    }

    private static $photos = ['no_profile.png', 'no_profile2.png', 'no_profile3.png', 'no_profile4.png'];
    /**
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    private function getRandomProfilePicture()
    {
        $session_key = "profile_pic.{$this->id}";
        if (session($session_key) == null)
            $this->chooseRandomProfileImage();

        return session($session_key);
    }

    private function chooseRandomProfileImage()
    {
        $index = array_rand(static::$photos);
        $picture = static::$photos[$index];
        $url = url("img/{$picture}");

        session()->put("profile_pic.{$this->id}", $url);
    }
}
