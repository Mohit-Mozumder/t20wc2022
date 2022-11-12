<?php

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

Route::get('/admin', [AdminController::class, 'news']);

//END OF ADMIN 

Route::get('/', [HomeController::class, 'home']);