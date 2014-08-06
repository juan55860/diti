<?php
//Route::get('/', function()
//{
	//return View::make('hello'); // asi venia de laravel
// Page Home
// http://diti.com/
Route::get('/', ['as' =>'home','uses' =>'HomeController@index']);
// Page Category con su url y categoria
// http://diti.com/candidates/backend-developers/1
Route::get('candidates/{slug}/{id}', ['as' =>'category','uses' =>'CandidatesController@category']);
// nombre/q
Route::get('{slug}/{id}', ['as' =>'candidate','uses' =>'CandidatesController@show']);

Route::get('sign-up',['as'=>'sign_up','uses' =>'UsersController@signUp']);

Route::post('sign-up',['as'=>'register','uses' =>'UsersController@register']);
//});
 