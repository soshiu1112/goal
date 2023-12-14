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
        
        
        
        
        return view('goal.room')->with(['room'=>$room]);
        
   
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
    
    
    public function delete(Room $room){
        $room->delete();
        return redirect('/');
    }
}
