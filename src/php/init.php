<?php
	(@ $config = include_once 'config.php') or die ("There was a problem with you config file. Check it and try again");
	$config = json_decode($config,TRUE);
	
	$_ENV['hostname']=$config['hostname'];
	$_ENV['username']=$config['username'];
	$_ENV['password']=$config['password'];
	$_ENV['database']=$config['database'];
	
	if ($environment == 'debug')
	{
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}

	

	require('./src/php/routes.php');
