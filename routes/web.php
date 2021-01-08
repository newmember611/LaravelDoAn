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


Route::get('/conversations', "ConversationsController@index")->name('conversations.index');
Route::post('/conversations', "ConversationsController@store")->name('conversations.store');
Route::get('/conversations/create', "ConversationsController@create")->name('conversations.create');
Route::get('/conversations/{id}', "ConversationsController@show")->name('conversations.show');

Route::patch('/conversations/{id}/update', "ConversationsController@update")->name('conversations.update');
Route::get('/conversations/{id}/edit', "ConversationsController@edit")->name('conversations.edit');



