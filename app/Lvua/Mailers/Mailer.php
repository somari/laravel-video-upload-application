<?php namespace Lvua\Mailers;

use Mail;

abstract class Mailer {

	public function sendTo($user, $subject, $view, $data)
	{
		Mail::queue($view , $data,function($message) use($user,$subject,$data)
		{
			$message->to($user->email)
					->subject($subject);
		});
	}
}