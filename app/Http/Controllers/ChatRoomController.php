<?php

namespace App\Http\Controllers;

use App\Mail\SampleNotification;
use Illuminate\Http\Request;
use App\Events\ChatMessageRecieved;
use App\Models\Message;
use App\Models\Room;
use App\Models\RoomUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ChatRoomController extends Controller
{
    public function __construct()
    {
    }
 
 
    public function index(Room $room)
    {
        $input = ['opponent_id' => Auth::id()];
        $room->fill($input)->save();
        
        
        // $loginId = Auth::id();
        
        // $recieve = $room->user->id;
        
        // // チャットの画面
        
        // $param = [
        //   'send' => $loginId,
        //   'recieve' => $recieve,
          
        // ];
        
        // // 送信 / 受信のメッセージを取得する
        
        // $query = Message::where('send' , $loginId)->where('recieve' , $recieve);;
        // $query->orWhere(function($query) use($loginId , $recieve){
        //     $query->where('send' , $recieve);
        //     $query->where('recieve' , $loginId);
 
        // });
        
        // $messages = $query->get();
        
        return view('goal.room')->with(['room'=>$room]);
        
        
        
        
        
        
        
 
        
 
        // return view('goal.room' , compact('param' , 'messages'));
    }
 
    /**
     * メッセージの保存をする
     */
    public function store(Request $request)
    {
        // リクエストパラメータ取得
        $insertParam = [
            'send' => $request->input('send'),
            'recieve' => $request->input('recieve'),
            'message' => $request->input('message'),
        ];
 
 
        // メッセージデータ保存
        try{
            Message::insert($insertParam);
        }catch (\Exception $e){
            return false;
 
        }
 
 
        // イベント発火
        event(new ChatMessageRecieved($request->all()));
 
        // メール送信
        $mailSendUser = User::where('id' , $request->input('recieve'))->first();
        $to = $mailSendUser->email;
        Mail::to($to)->send(new SampleNotification());
 
        return true;
 
    }
}
