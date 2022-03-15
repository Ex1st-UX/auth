<?php

namespace App\Auth;

class GoogleConnector implements AuthConnector
{
	public $login, $password;

	public function __construct($login, $password)
	{
		$this->login = $login;
		$this->password = $password;
	}

	public function login(): void
	{
		if ($this->login && $this->password) {
			echo 'hello ' . $this->login;
		}
	}
}