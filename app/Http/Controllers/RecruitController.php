<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit;
use App\Models\Regulation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class RecruitController extends Controller
{
    public function board(Recruit $recruit,Regulation $regulation){
        return view('goal.board',compact('regulation'))->with(['regulations' => $regulation->get()])->with(['recruits' => $recruit->getPaginateByLimit()]);
    }
    
    public function createRecruit(Recruit $recruit,Regulation $regulation){
        return view('goal.createRecruit',compact('recruit'))->with(['regulations' => $regulation->get()]);
    }
    
    public function store(Request $request, Recruit $recruit){
        $user = Auth::user();
        $inputs = ['user_id'=>$user->id];
        $input = $request['recruit'];
        $recruit->fill($input)->fill($inputs)->save();
        return redirect('/' );
    }
    
    
    
    
}
