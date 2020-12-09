<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController; 
use App\Http\Controllers\HomeController; 
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers; 


Route::get('/pastEvents', function () {
    return view('pastEvents');
});

// Route::get('/comingEvents', function () {
//     return view('comingEvents');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/createEvents', [EventController::class, 'create'])->name('createEvents')->middleware('auth'); 



Route::get('/comingEvents', [EventController::class, 'index'])->name('comingEvents')->middleware('auth');

Route::post('/store',[EventController::class, 'store'])->name('store')->middleware('auth');
