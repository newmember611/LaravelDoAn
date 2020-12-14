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
/*
Route::get('/login', ['as' => 'getLogin', 'uses' => 'AdminLoginController@getLogin']);
Route::post('/login', ['as' => 'postLogin', 'uses' => 'AdminLoginController@postLogin']);
Route::get('/logout', ['as' => 'getLogout', 'uses' => 'AdminLoginController@getLogout']);*/

Route::get('/login', "AdminLoginController@getLogin")->name('login.get');
Route::post('/login', "AdminLoginController@postLogin")->name('login.post');
Route::get('/logout', "AdminLoginController@getLogout")->name('logout');

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function() {
	Route::get('/', function() {
		return view('admin.home');
	});
});

Route::get('/user', "UserController@index")->name('user.index');
Route::post('/user', "UserController@store")->name('user.store');
Route::get('/user/create', "UserController@create")->name('user.create');
Route::get('/user/{id}/edit', "UserController@edit")->name('user.edit');
Route::get('/user/{id}', "UserController@show")->name('user.show');
Route::patch('/user/{id}', "UserController@update")->name('user.update');


