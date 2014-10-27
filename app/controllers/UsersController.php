<?php

class UsersController extends BaseController {

	function __construct()
	{
		Event::listen('user.changepassword', 'Lvua\Mailers\ChangePasswordMailer@notify');
	}

	function register()
	{
		$user = Sentry::register([
			'first_name' => Input::get('first_name'),
			'last_name' => Input::get('last_name'),
			'email'    => Input::get('email'),
			'password' => Input::get('password'),
			'activated' => 1
			]);

		return $user;
	}	

	function authenticate()
	{
		$user = Sentry::authenticate([ 'email' => Input::get('email'),	'password' => Input::get('password') ]);

		return Redirect::intended('/');
	}

	function logout()
	{
		Sentry::logout();

		return Redirect::to('/');
	}

	function reset()
	{
		try
		{
			$user = Sentry::findUserByLogin(Input::get('email'));

			$resetCode = $user->getResetPasswordCode();

			return Redirect::to('/');

		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			echo 'User was not found.';
		}
	}

}