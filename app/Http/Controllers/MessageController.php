<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function mymessages()
    {
    	$receivedMessages = auth()->user()->receivedMessages;
    	//dd($receivedMessages);
    	return view('messages.my',compact(['receivedMessages']));
    }
}
