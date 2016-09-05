<?php

namespace FriendZone;

use Illuminate\Database\Eloquent\Model;
use FriendZone\User;

class FriendRequest extends Model
{
    protected $table = 'friend_requests';
	protected $fillable = [
		'sender_id','receiver_id'
	];

    public function sender()
    {
        return $this->belongsTo(User::class);
    }

    public function receiver()
    {
        return $this->belongsTo(User::class);
    }

    public static function find($sender_id, $receiver_id)
    {
        return static::where('sender_id', $sender_id)->where('receiver_id', $receiver_id)->first();
    }
}
