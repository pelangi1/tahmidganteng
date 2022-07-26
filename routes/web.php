<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\BookProductController;
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
// });

// Route::get('/','bookController@index');
Route::get('/',[bookController::class,'index']);
// Route::get('/', 'app\Http\Controllers\bookController@index');
// Route::get('/book', [BookProductController::class, 'index']);

Route::group(['middleware'], function (){
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('/book', 'BookProductController@index')->name('book');
    Route::resource('book','BookProductController');
    // Route::resource('/book', [BookProductController::class, 'index']);
    });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/book','BookProductController');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
