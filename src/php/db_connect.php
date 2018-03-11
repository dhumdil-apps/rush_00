<?php

	$host = getenv('DATABASE_HOST');
	$username = getenv('DATABASE_USERNAME');
	$password = getenv('DATABASE_PASSWORD');
	$database = getenv('DATABASE_NAME');

	$link = mysqli_connect($host, $username, $password, $database);

	if (getenv("environment") == 'debug' && !$link)
	{
		echo 'Error: Unable to connect to MySQL.' . PHP_EOL;
		echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
		echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
		exit;
	}

	function sqlQuery($query)
	{
		$link = mysqli_connect($host, $username, $password, $database);

		if (getenv("environment") == 'debug' && !$link)
		{
			echo 'Error: Unable to connect to MySQL.' . PHP_EOL;
			echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
			echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
			exit;
		}
		$result = mysqli_query($link, $query);
		return $result;
		mysqli_close($link);
	}

	function addUser($username, $email, $password, $address, $phone) {
		$query = "INSERT INTO users (name, email, password, address, phone) VALUES ('".$username."', '".$email."', MD5('".$password."'), '".$password."', '".$phone."'),";
		$rez = sqlQuery($query);
		if(!$rez) {
			$rez = "no users added";
			return($rez);
		}
	}

	function removeUserByEmail($email) {
		$query = "DELETE FROM users WHERE users.email like ".$email;
		
	}
