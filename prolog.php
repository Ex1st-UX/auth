<?php

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/core/SocialAuth.php'))
	require_once($_SERVER['DOCUMENT_ROOT'] . '/core/SocialAuth.php');

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/core/AuthConnector.php'))
	require_once($_SERVER['DOCUMENT_ROOT'] . '/core/AuthConnector.php');

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/core/GoogleConnector.php'))
	require_once($_SERVER['DOCUMENT_ROOT'] . '/core/GoogleConnector.php');

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/core/GoogleAuth.php'))
	require_once($_SERVER['DOCUMENT_ROOT'] . '/core/GoogleAuth.php');