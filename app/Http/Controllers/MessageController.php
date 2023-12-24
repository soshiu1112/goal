<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use App\Events\SendMessage;

class MessageController extends Controller
{


    public function newMessage (Message $message, Request $request)
    {
        $message->message = $request->message;
        $message->room_id = $request->room_id;
        $message->user_id = Auth::id();
        $message->save();
        

        //イベント発動
        //新しいメッセージをpusherに
        event(new SendMessage([$message,Auth::user()]));
    }
    
    // //最初にアクセスした時、全メッセージを返す
    public function allMessage(Request $request)
    {
        $messages = Message::where('room_id', $request->room_id)->with('user')->get();
        return $messages;
    }

}
