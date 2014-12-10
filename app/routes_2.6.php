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
 

// //Route::group($attributes, $callback);
//Route::group(array('before'=> 'auth'), function(){
//        //this route uses that Postcontroller method listing
//       Route::get('post/listing', array('uses'=>'PostController@listing', 'as' => 'get.post.listing')); 
//       /// post/listing can be changed with blog/listing  in routes, with no hassle of changing controller & view 
//
//       // 'before' means run the filter before routing to the controller & goes back to public/login page
//       Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'get.post.single'))->where(array ( 
//               'id' =>'[0-9][0-9]*',
//          ) );
//        //Route::post($uri, $action) 
//        Route::post('post/{id}', array('uses'=>'PostController@update', 'as' => 'post.post.single'))->where('id', '[1-9][0-9]*');
//});
 

 //Route::group($attributes, $callback);
Route::group(array('prefix'=> 'admin'), function(){
        //this route uses that Postcontroller method listing
       Route::get('post/listing', array('uses'=>'PostController@listing', 'as' => 'get.post.listing')); 
       /// post/listing can be changed with blog/listing  in routes, with no hassle of changing controller & view 

       // 'before' means run the filter before routing to the controller & goes back to public/login page
       Route::get('post/{id}', array('uses'=>'PostController@single', 'as' => 'get.post.single'))->where(array ( 
               'id' =>'[0-9][0-9]*',
          ) );
        //Route::post($uri, $action) 
        Route::post('post/{id}', array('uses'=>'PostController@update', 'as' => 'post.post.single'))->where('id', '[1-9][0-9]*');
});


//redirects to login page
 Route::get('login',function(){
     return "login page";
 });