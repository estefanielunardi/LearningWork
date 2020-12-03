<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController; 
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');


Route::get('/pastEvents', function () {
    return view('pastEvents');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [EventController::class, 'index'])->name('welcome');

Route::get('/create', [EventController::class, 'create'])->name('create');

Route::post('/events',[EventController::class, 'store'])->name('store');
