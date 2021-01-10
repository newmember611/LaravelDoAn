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
Route::get('/user/{id}', "UserController@show")->name('user.show');


Route::patch('/user/{id}/update', "UserController@update")->name('user.update');
Route::get('/user/{id}/edit', "UserController@edit")->name('user.edit');


Route::patch('/user/{id}/updateDeactive', "UserController@updateDeactive")->name('user.updateDeactive');
Route::get('/user/{id}/deactive', "UserController@deactive")->name('user.deactive');

Route::post('/userhaveconvation', "UserHaveConvationController@store")->name('userhaveconvation.store');
Route::get('/userhaveconvation/create', "UserHaveConvationController@create")->name('userhaveconvation.create');
Route::get('/userhaveconvation', "UserHaveConvationController@index")->name('userhaveconvation.index');
Route::patch('/userhaveconvation/{id}/update', "UserHaveConvationController@update")->name('userhaveconvation.update');
Route::get('/userhaveconvation/{id}/edit', "UserHaveConvationController@edit")->name('userhaveconvation.edit');


