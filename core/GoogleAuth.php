<?php

namespace App\Auth;

class GoogleAuth extends SocialAuth 
{
	public $login, $password;

	function __construct(string $login, string $password)
	{
		$this->login = $login;
		$this->password = $password;
	}

	public function getAuth(): AuthConnector
	{
		return new GoogleConnector($this->login, $this->password);
	}
}