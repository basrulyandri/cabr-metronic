<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['body','attachment','sender','receiver','hasRead'];

    public function UserSender()
    {
    	return $this->belongsTo(User::class,'sender');
    }

    public function UserReceiver()
    {
    	return $this->belongsTo(User::class,'receiver');
    }
}
