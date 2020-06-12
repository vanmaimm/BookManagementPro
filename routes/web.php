<?php

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
Route::get("/books","BookController@index");
Route::get("/books/create","BookController@create");
Route::post("/books","BookController@store");
//Route::delete("/books/{id}","BookController@destroy");
Route::get("/books/edit/{id}","BookController@edit");
Route::patch("/books/{id}","BookController@update");
Route::get('/auth/login',"Auth\LoginController@index")->name("auth.login");
Route::post('/auth/login',"Auth\LoginController@login");
Route::get('/home',"User\HomeController@index")->name("home");
Route::get('/admin/dashboard',"Admin\DashboardController@index")->name("admin.dashboard");
Route::delete("/admin/books/{id}","Admin\DashboardController@destroy");
Route::get("/admin/books/edit/{id}","Admin\DashboardController@edit");
Route::patch("/admin/books/{id}","Admin\DashboardController@update");