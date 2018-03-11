<?php

	require('./src/php/db_connect.php');

	$register_errors = array();

	$name_is_ok = 0;
	$email_is_ok = 0;
	$address_is_ok = 0;
	$password_is_ok = 0;
	$phone_is_ok = 0;

	$name = '';
	$email = '';
	$address = '';
	$password = '';
	$phone = '';

	if (isset($_POST['name']))
	{
		$name = $_POST['name'];
		$_SESSION['name'] = $_POST['name'];

		if (!empty($name))
		{
			$name = mysqli_real_escape_string($link, $name);
			$name_is_ok = 1;
		}
	}

	if (isset($_POST['address']))
	{
		$address = $_POST['address'];
		$_SESSION['address'] = $_POST['address'];

		if (!empty($address))
		{
			$address = mysqli_real_escape_string($link, $address);
			$address_is_ok = 1;
		}
	}

	if (isset($_POST['phone']))
	{
		$phone = $_POST['phone'];
		$_SESSION['phone'] = $_POST['phone'];

		if (!empty($phone))
		{
			$phone = mysqli_real_escape_string($link, $phone);
			$phone_is_ok = 1;
		}
	}

	if (isset($_POST['email']))
	{
		$email = $_POST['email'];
		$_SESSION['email'] = $_POST['email'];

		if (!empty($email))
		{
			$email = mysqli_real_escape_string($link, $email);
			$email_is_ok = 1;
		}
	}

	if (isset($_POST['password']))
	{
		$password = $_POST['password'];
		$_SESSION['password'] = $_POST['password'];

		if (!empty($password))
		{
			$password = mysqli_real_escape_string($link, $password);
			$password_is_ok = 1;
		}
	}

	if ($name_is_ok && $email_is_ok && $address_is_ok && $password_is_ok && $phone_is_ok)
	{
		$result = addUser($name, $email, md5($password), $address, $phone);

		// var_dump($name);
		// var_dump($email);
		// var_dump(md5($password));
		// var_dump($address);
		// var_dump($phone);
		$result = addUser($name, $email, md5($password), $address, $phone);
		// var_dump($result);

		if ($result)
		{
			$_SESSION['logged_in'] = 1;
			header('Location: index.php');
		}
	}
