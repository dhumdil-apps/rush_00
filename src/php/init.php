<?php
	(@ $config = include_once 'config.php') or die ("There was a problem with you config file. Check it and try again");
	$config = json_decode($config, TRUE);

	$_SESSION['db_hostname'] = $config['hostname'];
	$_SESSION['db_username'] = $config['username'];
	$_SESSION['db_password'] = $config['password'];
	$_SESSION['db_database'] = $config['database'];
	$_SESSION['environment'] = $config['environment'];

	if ($_SESSION['environment'] == 'debug')
	{
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}

	require('./src/php/routes.php');
