<?php

class UsersController extends BaseController {

	function register()
	{
		$user = Sentry::register([
			'first_name' => Input::get('first_name'),
			'last_name' => Input::get('last_name'),
			'email'    => Input::get('email'),
			'password' => Input::get('password')
		]);

		return $user;
	}	

}