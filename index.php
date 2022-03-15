<?php

require $_SERVER['DOCUMENT_ROOT'] . '/prolog.php';

use App\Auth\GoogleAuth;

$inst = new GoogleAuth('admin', 'qwerty');
$inst->setAuth();