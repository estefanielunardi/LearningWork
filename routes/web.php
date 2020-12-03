<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController; 
use App\Http\Controllers\HomeController; 
use Illuminate\Support\Facades\Auth; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/pastEvents', function () {
    return view('pastEvents');
});

Route::get('/comingEvents', function () {
    return view('comingEvents');
});

Route::get('/createEvents', function () {
    return view('createEvents');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [EventController::class, 'index'])->name('welcome');

Route::get('/createEvents', [EventController::class, 'create'])->name('createEvents')->middleware('auth'); 

Route::post('/store',[EventController::class, 'store'])->name('store')->middleware('auth');
