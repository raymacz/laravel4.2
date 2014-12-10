<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
  //Route::group($attributes, $callback);

Route::get('post/listing', array('uses'=>'PostController@listing', 'as' => 'get.post.listing')); 
Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'get.post.single'))->where(array (   'id' =>'[0-9][0-9]*', ) );
//Route::post($uri, $action) 
Route::post('post/{id}', array('uses'=>'PostController@update', 'as' => 'post.post.single'))->where('id', '[1-9][0-9]*');

//Route::resource($name, $controller, $options)
//Route::resource('user','UserController', array('except' => array('show')));
Route::resource('user','UserController');
