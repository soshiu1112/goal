<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\RoomController;
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
});

/*Route::get('/',function(){
    return view('goal.board');
});
*/
Route::controller(RecruitController::class)->middleware(['auth'])->group(function(){
    Route::post('/','store')->name('store');
    Route::get('/','board')->name('board');
    
    Route::get('/createRecruit','createRecruit')->name('regulations');
    
    Route::get('/room');
    
});

Route::controller(RegulationController::class)->middleware(['auth'])->group(function(){

    Route::get('/{regulation}','index')->name('index');
});

Route::controller(RoomController::class)->middleware(['auth'])->group(function(){
    Route::get('/room/{room}','room')->name('room');
});

require __DIR__.'/auth.php';
