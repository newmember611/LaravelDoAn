<?php

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
    return view('auth.login');
});


Route::get('logintest', 'AdminLoginController@getcheck');
Route::post('logintest', 'AdminLoginController@check');

//USER
Route::get('/user', "UserController@index")->name('user.index');
Route::post('/user', "UserController@store")->name('user.store');
Route::get('/user/create', "UserController@create")->name('user.create');
Route::patch('/user/{id}', "UserController@deactive")->name('user.update_deactive');
Route::get('/user/{id}/deactive', "UserController@deactive")->name('user.deactive');
Route::get('/user/{id}/edit', "UserController@edit")->name('user.edit');
Route::get('/user/{id}', "UserController@show")->name('user.show');
Route::patch('/user/{id}', "UserController@update")->name('user.update');


