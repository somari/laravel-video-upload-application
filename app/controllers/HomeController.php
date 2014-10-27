<?php

class HomeController extends BaseController {

	public function home()
	{
		$users = User::all();

		return View::make('home')
		->with(compact('users'));
	}

}
