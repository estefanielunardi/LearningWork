<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/comingEvents', function () {
//     return view('comingEvents');
// })->name('comingEvents');

Route::get('/pastEvents', function () {
    return view('pastEvents');
});

Route::get('/events', function () {
    return view('events');
})->name('events'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/comingEvents', [App\Http\Controllers\EventController::class, 'index'])->name('comingEvents');
