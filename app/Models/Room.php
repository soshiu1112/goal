<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Regulation;
use Illuminate\Support\Facades\Auth;

class Room extends Model
{
    use HasFactory;
    
    
    protected $table = 'rooms';
    
    protected $fillable=[
        'regulation_id',
        'creater_id',
        'opponent_id',
        'remarks',
        'matches',
        ];
    public function getPaginateByLimit(int $limit_count = 5){
        return $this::with('regulation')->orderBy('updated_at','DESC')
                                        ->paginate($limit_count);
    }
    //userは投稿の作成者
    public function user(){
        return $this -> belongsTo(User::class,'creater_id');
    }
    
    public function users(){
        return $this ->hasMany(User::class);
    }
    
    public function regulation(){
        return $this -> belongsTo(Regulation::class,'regulation_id');
    }
    
    
    
}
