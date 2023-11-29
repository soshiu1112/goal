<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Regulation;


class RegulationController extends Controller
{
    public function index(Regulation $regulation){
        return view('goal.index')->with(['recruits' => $regulation->getByRegulation()]);
    }

}