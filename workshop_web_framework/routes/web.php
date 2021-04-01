<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\ManagementUserController;

//use App\Http\Controllers\frontend\HomeController;

use App\Http\Controllers\backend\DashboardController;

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
/*
Route::get('user', [ManagementUserController::class, 'index']);
//Route::resource('user', ManagementUserController::class);

Route::get("/home", function () {
    return view("home");
});
*/
Route::get('/', function () {
    return view('welcome');
});

/*Route::group(['namespace' => 'App\Http\Controllers\frontend'], function () {
    Route::resource('home', 'HomeController');
});*/

Route::group(['namespace' => 'App\Http\Controllers\backend'], function () {
    Route::resource('dashboard', 'DashboardController');
});
