<?php

	$host = getenv('DATABASE_HOST');
	$username = getenv('DATABASE_USERNAME');
	$password = getenv('DATABASE_PASSWORD');
	$database = getenv('DATABASE_NAME');

	$db = mysqli_connect($host, $username, $password, $database);

	if ($environment == 'debug' && !$link)
	{
		echo 'Error: Unable to connect to MySQL.' . PHP_EOL;
		echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
		echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
		exit;
	}
