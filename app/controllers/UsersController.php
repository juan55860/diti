<?php

use \diti\Entities\User;

class UsersController extends BaseController
{
	public function signUp( )
	{
		return View::make('users/sign-up');
	}
	public function register()
	{
		$data = Input::all();
		$rules=[ 'full_name' => 'required',
			      'email'    => 'required|email|unique:users,email',
			      'password' => 'required|confirmed',
			      'password_confirmation' => 'required'
		];
		$validation = \Validator::make($data,$rules);

		if($validation->passes())
		{
			$user= User::create($data);
			return Redirect::route('home');
		}
		else{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}
	}

}