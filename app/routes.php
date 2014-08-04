<?php



//Route::get('/', function()
//{
	//return View::make('hello'); // asi venia de laravel
Route::get('/', ['as' =>'home','uses' =>'HomeController@index']);
//});
