<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {


    return view('welcome');


});

//Route::get('/posts/{id}/{name}/{test}','AppController@show_post');



//Route::get('/posts','AppController@show_post');
//
//
//
//Route::get('/contact','AppController@contact');



//Route::get('/contact', function () {
//
//
//    echo "hello contact";
//
//
//});
//Route::get('/about', function () {
//
//
//    echo "hello about";
//
//
//});
//
//Route::get('admin/posts/example', array('as' =>'admin.home', function () {
//
//
//    $url = route('admin.home');
//    return "this url is". $url;
//
//}));
