<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers; 


Route::get('/pastEvents', function () {
    return view('pastEvents');
});


Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/', [EventController::class, 'highlight'])->name('welcome');

Route::get('/comingEvents', [EventController::class, 'index'])->name('comingEvents');

Route::get('/subscribe/{id}', [UserController::class, 'subscribe'])->name('subscribe');

Route::get('/unsubscribe/{id}', [UserController::class, 'unsubscribe'])->name('unsubscribe');

Auth::routes();

Route::get('/createEvents', [EventController::class, 'create'])->name('createEvents')->middleware('auth'); 

Route::post('/store',[EventController::class, 'store'])->name('store')->middleware('auth');

Route::delete('/delete/{events}',[EventController::class, 'destroy'])->name('delete')->middleware('auth');

// Route::update('/editEvent',[EventController::class, 'edit'])->name('edit')->middleware('auth');

