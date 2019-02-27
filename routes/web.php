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
Route::get('hello',function(){
	return 'hi jack mei!';
});
Route::get('user/{id}/{name}/{age}',function($id,$name,$age){
	return 'id = '.$id.'name = '.$name.'age = '.$age;
});
Route::get('/test','Home\UserController@show');