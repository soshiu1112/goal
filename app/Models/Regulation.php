<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;
    
    public function recruits(){
        return $this->hasMany(Recruit::class);
    }
    
    public function getByRegulation(int $limit_count = 5){
        return $this->recruits()->with('regulation')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
