<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmControllers;

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
    return view('tht8');
});
Route::get('/tiket', function () {
    return view('tiket');
});
Route::get('/coming', function () {
    return view('coming');
});

Route::resource('films',filmControllers::class);




