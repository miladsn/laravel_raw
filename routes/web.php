<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PhotosController;


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
    return view('main1');
});
Route::get('/post', function () {
    return view('posts');
});
//ajax and test
Route::get('/ajax', function () {
    return view('ajax');
});
Route::post("ajaxresult",[\App\Http\Controllers\Dashboard_Controller::class,"ajax"]);


Route::get('/test', function () {
    return view('test');
});

Route::get('/photo', [\App\Http\Controllers\PhotosController::class, 'index']);
////

//dashboard
Route::get("/dashboard",[\App\Http\Controllers\Dashboard_Controller::class,"index"])->middleware("Firstaccessmiddleware");
//cron
Route::get("/inserter",[\App\Http\Controllers\Dashboard_Controller::class,"inserter"]);
//login
Route::get("/login",[\App\Http\Controllers\Logincontroller::class,"index"]);
Route::post("/checklogin",[\App\Http\Controllers\Logincontroller::class,"check_login"])->middleware("Check_login_middleware");
Route::get("logout",[\App\Http\Controllers\Logincontroller::class,"logout"]);
//menu
Route::get("/menu",[\App\Http\Controllers\Dashboard_Controller::class,"menu"]);