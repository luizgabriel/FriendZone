<?php

namespace FriendZone;

use Illuminate\Database\Eloquent\Model;
use FriendZone\Comment;
use FriendZone\User;


class Post extends Model
{
    protected $fillable = [
        'content',
        'user_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
