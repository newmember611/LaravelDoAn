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
Route::get('logout', 'AdminLoginController@logout')->name('admin.logout');

//USER
Route::get('/user', "UserController@index")->name('user.index');
Route::post('/user', "UserController@store")->name('user.store');
Route::get('/user/create', "UserController@create")->name('user.create');
Route::get('/user/{id}', "UserController@show")->name('user.show');


Route::patch('/user/{id}/update', "UserController@update")->name('user.update');
Route::get('/user/{id}/edit', "UserController@edit")->name('user.edit');


Route::patch('/user/{id}/deactive', "UserController@updateDeactive")->name('user.updateDeactive');
// Route::get('/user/{id}/deactive', "UserController@deactive")->name('user.deactive');


//MESSAGE
Route::get('/message', "MesssageController@index")->name('msg.index');
Route::post('/message', "MesssageController@store")->name('msg.store');
Route::get('/message/create', "MesssageController@create")->name('msg.create');
Route::get('/message/{id}', "MesssageController@show")->name('msg.show');
Route::patch('/message/{id}/update', "MesssageController@update")->name('msg.update');
Route::get('/message/{id}/edit', "MesssageController@edit")->name('msg.edit');


Route::get('/conversations', "ConversationsController@index")->name('conversations.index');
Route::post('/conversations', "ConversationsController@store")->name('conversations.store');
Route::get('/conversations/create', "ConversationsController@create")->name('conversations.create');
Route::get('/conversations/{id}', "ConversationsController@show")->name('conversations.show');

Route::patch('/conversations/{id}/update', "ConversationsController@update")->name('conversations.update');
Route::get('/conversations/{id}/edit', "ConversationsController@edit")->name('conversations.edit');

Route::post('/userhaveconvation', "UserHaveConvationController@store")->name('userhaveconvation.store');
Route::get('/userhaveconvation/create', "UserHaveConvationController@create")->name('userhaveconvation.create');
Route::get('/userhaveconvation', "UserHaveConvationController@index")->name('userhaveconvation.index');
Route::patch('/userhaveconvation/{id}/update', "UserHaveConvationController@update")->name('userhaveconvation.update');
Route::get('/userhaveconvation/{id}/edit', "UserHaveConvationController@edit")->name('userhaveconvation.edit');


