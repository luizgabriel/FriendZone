<?php

namespace FriendZone;

use Illuminate\Database\Eloquent\Model;
use FriendZone\User;

class FriendRequest extends Model
{
	protected $fillable = [
		'sender_id','receiver_id'
	];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
