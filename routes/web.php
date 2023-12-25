<?php

use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::controller(RoomController::class)->group(function(){
        Route::post('/','store')->name('store');
        Route::get('/','board')->name('board');
        
        
        Route::get('/createRecruit','createRecruit')->name('createRecruit');
        
    });
    
    Route::controller(RegulationController::class)->group(function(){
    
        Route::get('/regulation/{regulation}','index')->name('index');
    });
    
    
    Route::controller(ChatRoomController::class)->group(function(){
        Route::post('/room/send' , 'store')->name('chatSend');
        Route::get('/room/{room}' , 'index')->name('chat.index');
        Route::delete('/room/{room}','delete')->name('delete');
    });
    
    Route::post('/newmessage', [MessageController::class, 'newMessage']);
    Route::get('/allmessage',[MessageController::class, 'allMessage']);
});




require __DIR__.'/auth.php';
