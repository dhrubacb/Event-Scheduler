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
    return view('welcome');
});

Route::get('/index', ['as' => 'event.index', 'uses' => 'HomeController@show']);

Route::get('event/create', ['as' => 'event.create', 'uses' => 'EventController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

Route::get('login', ['as' =>'login','uses' => 'pagecontroller@login']);
Route::post('dologin', ['as' => 'dologin', 'uses' => 'Auth\AuthController@doLogin']); 

Route::post('event/store', ['as' => 'event.store', 'uses' => 'EventController@store']);
Route::get('event/edit/{id}', ['as' => 'event.update', 'uses' => 'EventController@edit']);
Route::get('event/list', ['as' => 'event.list', 'uses' => 'EventController@list']);
Route::put('exam/update/{id}',['as' => 'event.update.save', 'uses' =>'EventController@update_save']);
Route::any('exam/delete/{id}',['as' => 'event.delete', 'uses' =>'EventController@destroy']);
Route::get('event/type', ['as' => 'event.type', 'uses' => 'EventController@read']);
Route::post('e_type/store', ['as' => 'e_type.store', 'uses' => 'EventController@stock']);

Route::put('event_type/edit/{id}', ['as' => 'event_type.update', 'uses' => 'EventController@update']);
Route::any('event_type/delete/{id}',['as' => 'event_type.delete', 'uses' =>'EventController@delete']);