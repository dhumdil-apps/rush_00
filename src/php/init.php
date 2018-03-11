<?php

	$environment = getenv('APP_ENV');

	if ($environment == 'debug')
	{
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}

	session_start();

	require('./src/php/routes.php');
