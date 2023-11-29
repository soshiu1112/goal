<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Room extends Model
{
    use HasFactory;
    
    public function user(){
        return $this -> belongsTo(User::class);
    }
    public function recruits(){
        return $this->hasMany(Recruit::class);
    }
}
