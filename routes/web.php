<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', ('PageController@index'));
// Route::get('/home', ('PageController@home'));
Route::get('/', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'home']);