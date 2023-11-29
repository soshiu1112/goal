<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Regulation;
use Illuminate\Support\Facades\Auth;

class Recruit extends Model
{
    use HasFactory;
    
    
    protected $table = 'recruits';
    
    protected $fillable=[
        'regulation_id',
        'user_id',
        'remarks',
        'matches',
        ];
    public function getPaginateByLimit(int $limit_count = 5){
        return $this::with('regulation')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public function user(){
        return $this -> belongsTo(User::class,'user_id');
    }
    
    public function regulation(){
        return $this -> belongsTo(Regulation::class,'regulation_id');
    }
    

}
