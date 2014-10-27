<?php namespace Lvua\Mailers;


class ResetPasswordMailer extends Mailer
{

	public function change($user, $resetCode)
	{
		
		$view = 'emails.auth.reminder';
		$data = [
					'token' => $resetCode
				];

		$subject = 'Password Reset';

		return $this->sendTo($user, $subject, $view, $data);
	}

} 