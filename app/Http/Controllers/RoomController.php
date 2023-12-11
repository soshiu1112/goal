<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Regulation;
use App\Models\Messages;
use App\Models\RoomUser;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class RoomController extends Controller
{
    public function board(Room $room,Regulation $regulation)
    {
        return view('goal.board')
            ->with(['regulations' => $regulation->get(),
                    'rooms' => $room->getPaginateByLimit()
                    ]);
    }
    
    public function createRecruit(Room $room,Regulation $regulation){
        return view('goal.createRecruit')->with(['regulations' => $regulation->get()]);
    }
    
    public function store(Request $request, Room $room,RoomUser $room_user){
        $input = $request['room'];
        $user = Auth::user();
        $input += ['user_id'=>$user->id];
        $room->fill($input)->save();
        
        $input2 = ['user_id'=>$user->id,'room_id'=>$room->id];
        $room_user->fill($input2)->save();
        return redirect('/');
    }
    
    
    public function room(Room $room,User $user){
        
        
        return view('goal.room')->with(['rooms'=>$room->get(),
                                        'users'=>$user->get(),
                                        'messages'=>$message->get()]);
    }
    
    
}
