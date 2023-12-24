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
        return view('goal.createRecruit')->with(['regulations' => $regulation->get(),
                                                 'room' => $room,
                                                 ]);
    }
    
    public function store(Request $request, Room $room,RoomUser $room_user){
        $input = $request['room'];
        $user = Auth::user();
        $input += ['user_id'=>$user->id];
        $room->fill($input)->save();
        
        $inputId = ['user_id'=>$user->id,'room_id'=>$room->id];
        $room_user->fill($inputId)->save();
        return redirect('/room/'.$room->id);
    }
    
    
    
    public function index(Room $room)
    {
        $input = ['opponent_id' => Auth::id()];
        $room->fill($input)->save();
        
        
        
        return view('goal.room')->with(['room'=>$room]);
    }   
    
    
}
