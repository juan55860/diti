<?php



//Route::get('/', function()
//{
	//return View::make('hello'); // asi venia de laravel
// Page Home
Route::get('/', ['as' =>'home','uses' =>'HomeController@index']);
// Page Category con su url y categoria
Route::get('candidates/{slug}/{id}', ['as' =>'category','uses' =>'CandidatesController@category']);


//});
