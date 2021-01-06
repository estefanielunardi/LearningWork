<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers; 
use App\Http\Controllers\Auth\LoginController;




Route::get('/', [EventController::class, 'highlight'])->name('welcome');

Route::get('/comingEvents', [EventController::class, 'index'])->name('comingEvents');

Route::get('/pastEvents', [EventController::class, 'pastEvents'])->name('pastEvents');



Auth::routes();

Route::get('/welcome', [EventController::class, 'highlight'])->name('welcome')->middleware('admin');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/events/{id}', [EventController::class, 'destroy'])->name('destroy')->middleware('admin');

Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit')->middleware('admin');

Route::put('/update/{id}', [EventController::class, 'update'])->name('update')->middleware('admin');

Route::get('/createEvents', [EventController::class, 'create'])->name('createEvents')->middleware('admin'); 

Route::post('/store', [EventController::class, 'store'])->name('store')->middleware('admin');



Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/subscribe/{id}', [UserController::class, 'subscribe'])->name('subscribe')->middleware('auth');

Route::get('/unsubscribe/{id}', [UserController::class, 'unsubscribe'])->name('unsubscribe')->middleware('auth');

