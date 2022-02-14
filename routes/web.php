<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlagController;

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

// // Default
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/test', [HomeController::class, 'test'])->name('home.test');
Route::get('/retrieve', [HomeController::class, 'retrieve',])->name('home.retrieve');
Route::post('/test', [HomeController::class, 'saveItem'])->name('home.test');


// Route::post('/retrieve/flag', 'HomeController@randomflag');
Route::any('/flag', [FlagController::class, 'randomflag'])->name('home.flag');
// Route::post('/retrieve', [HomeController::class, 'randomflag'])->name('home.retrieve');

    
