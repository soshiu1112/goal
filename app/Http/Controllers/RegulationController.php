<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Regulation;
use App\Models\Room;


class RegulationController extends Controller
{
    public function index(Regulation $regulation){
        return view('goal.index')->with(['rooms' => $regulation->getByRegulation()]);
    }

}