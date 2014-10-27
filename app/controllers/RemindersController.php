<?php

class RemindersController extends Controller {

	function __construct()
	{
		Event::listen('user.resetpassword', 'Lvua\Mailers\ResetPasswordMailer@change');
	}

	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		return View::make('password.remind');
	}

	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postRemind()
	{
		
		try
		{
			$user = Sentry::findUserByLogin(Input::only('email'));

			$resetCode = $user->getResetPasswordCode();

			Event::fire('user.resetpassword', [$user, $resetCode]);

			return Redirect::to('/');

		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			echo 'User was not found.';
		}
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('password.reset')->with('token', $token);
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{
		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
			);

		$response = Password::reset($credentials, function($user, $password)
		{
			$user->password = Hash::make($password);

			$user->save();
		});

		switch ($response)
		{
			case Password::INVALID_PASSWORD:
			case Password::INVALID_TOKEN:
			case Password::INVALID_USER:
			return Redirect::back()->with('error', Lang::get($response));

			case Password::PASSWORD_RESET:
			return Redirect::to('/');
		}
	}

}
