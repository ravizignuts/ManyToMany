<?php

use App\Http\Controllers\mainController;
use Illuminate\Routing\Controller;
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
Route::controller(mainController::class)->group(function(){
    Route::get('addwriter','Writer_Add');
    Route::get('addbook','Book_Add');
    Route::get('showbook/{id}','Show_Book');
    Route::get('showwriter/{id}','Show_Writer');


});
