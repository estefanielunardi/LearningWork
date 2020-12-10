<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController; 
use App\Http\Controllers\HomeController; 
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers; 


Route::get('/pastEvents', function () {
    return view('pastEvents');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/', [EventController::class, 'highlight'])->name('welcome');

Route::get('/comingEvents', [EventController::class, 'index'])->name('comingEvents');

Auth::routes();

Route::get('/createEvents', [EventController::class, 'create'])->name('createEvents')->middleware('auth'); 

Route::post('/store',[EventController::class, 'store'])->name('store')->middleware('auth');

Route::delete('/delete',[EventController::class, 'delete'])->name('delete')->middleware('auth');