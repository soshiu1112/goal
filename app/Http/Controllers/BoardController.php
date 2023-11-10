<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function board(Board $board){
        return view('goal.board')->with(['board' => $board->get()]);
    }
}
