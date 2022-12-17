<?php

use App\Http\Controllers\Admin\MatchController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ScoreController;
use App\Http\Controllers\Admin\PlayersController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
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


//START OF ADMIN 



Route::group(['prefix' => 'admin', 'as' => 'admin.'],function (){
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('/teams', Admin\TeamController::class);
    Route::resource('/scores', Admin\ScoreController::class);
    Route::resource('/news', Admin\NewsController::class);
    Route::resource('/players', Admin\PlayersController::class);
    Route::resource('/matches', Admin\MatchController::class);
});


//END OF ADMIN 

Route::get('/', [HomeController::class, 'home']);