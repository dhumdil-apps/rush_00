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

	// CREATE USERS
	function addUser($username, $email, $password, $address, $phone) {
		$query = "INSERT INTO users (name, email, password, address, phone) VALUES ('".$username."', '".$email."', MD5('".$password."'), '".$password."', '".$phone."'),";
		$rez = sqlQuery($query);
		if(!$rez) {
			$rez = "no users added";
			return($rez);
		}
	}

	// READ USERS
	function queryUserByEmail($email) {
		$query = "SELECT * FROM users WHERE users.email like '".$email."'";
		$rez = sqlQuery($query);
		if(!$rez) {
			$rez = "no users added";
			return($rez);
		}
	}

	// UPDATE USERS
	// un query normal e de "SET name='nume', email='emailul', address='adresa', phone='telefon' 
	function updateUser($email, $q){
		$query = "UPDATE users ".$q." WHERE users.email like '".$email."'";
		$rez = sqlQuery($query);
		if(!$rez) {
			$rez = "no users added";
			return($rez);
		}
	}
	
	// DELETE USERS
	function removeUserByEmail($email) {
		$query = "DELETE FROM users WHERE users.email like '".$email."'";
		$rez = sqlQuery($query);
		if(!$rez) {
			$rez = "no users added";
			return($rez);
		}
	}

	// PODUCTS
	
	// CREATE PRODUCTS
	function addProduct($name, $catId, $stock, $price, $description, $img) {
		$query = "INSERT INTO products (name, catId, stock, price, description, picture) VALUES ('".$name."', '".$catId."', '".$stock."', '".$price."', '".$description."', '".$img."');";

		$rez = sqlQuery($query);
		if(!$rez) {
			$rez = "no users added";
			return($rez);
		}
	}

	// READ PRODUCTS
	function queryProductById($product) {
		$rez = sqlQuery($query);
		if(!$rez) {
			$rez = "no users added";
			return($rez);
		}
	}

	// // UPDATE USERS
	// // un query normal e de "SET name='nume', email='emailul', address='adresa', phone='telefon' 
	// function updateUser($email, $q){


	// 	$rez = sqlQuery($query);
	// 	if(!$rez) {
	// 		$rez = "no users added";
	// 		return($rez);
	// 	}
	// }
	
	// // DELETE USERS
	// function removeUserByEmail($email) {


	// 	$rez = sqlQuery($query);
	// 	if(!$rez) {
	// 		$rez = "no users added";
	// 		return($rez);
	// 	}
	// }

