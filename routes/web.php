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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');


Route::get('/pastEvents', function () {
    return view('pastEvents');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\EventController::class, 'index'])->name('welcome');

Route::get('/create', [App\Http\Controllers\EventController::class, 'create'])->name('create');

Route::post('/store', [App\Http\Controllers\EventController::class, 'store'])->name('store');
