<?php

namespace App\Auth;

abstract class SocialAuth
{
	abstract public function getAuth(): AuthConnector;
	
	public function setAuth(): void
	{
		$auth = $this->getAuth();
		$auth->login();
	}
}

