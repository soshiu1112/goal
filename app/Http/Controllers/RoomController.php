<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit;

class RoomController extends Controller
{
    public function room(Recruit $recruit){
        return view('goal.room')->with(['recruits'=>$recruit->get()]);
    }
}
