<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;
    
    public function rooms(){
        return $this->hasMany(Room::class);
    }
    
    public function getByRegulation(int $limit_count = 5){
        return $this->rooms()->with('regulation')
                                ->orderBy('updated_at','DESC')
                                ->paginate($limit_count);
    }
}
