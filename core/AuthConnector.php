<?php

namespace App\Auth;

interface AuthConnector
{
	public function login(): void;
}