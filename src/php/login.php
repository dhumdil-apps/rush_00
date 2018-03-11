<?php

	require('./src/php/db_connect.php');

	$login_errors = array();
	$email_is_ok = 0;
	$password_is_ok = 0;
	$email = '';
	$password = '';

	// Validate email
	if (isset($_POST['email']))
	{
		$email = $_POST['email'];
		$_SESSION['email'] = $email;

		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$login_errors['email'] = 'Email format is invalid.';
		}
		else
		{
			$ok = 0;
			$email = mysqli_real_escape_string($link, $email);
			$sql = "SELECT id FROM users WHERE email='$email'";
			$result = sqlQuery($sql);

			if ($result)
			{
				$ok = 1;
				var_dump($result);
			}

			if ($ok)
			{
				$email_is_ok = 1;
			}
			else
			{
				$login_errors['email'] = 'Email is not in our database, please register first.';
			}
		}
	}
	else
	{
		$login_errors['email'] = 'Enter an email.';
		$email_is_ok = 0;
	}

	// Validate password
	if ($email_is_ok)
	{
		if (isset($_POST['password']))
		{
			$password = $_POST['password'];
			$_SESSION['password'] = $password;

			if(!empty($password))
			{
				if (strlen($password) <= '8')
				{
					$login_errors['password'] = 'Your Password Must Contain At Least 8 Characters';
				}
				else if(!preg_match("#[0-9]+#", $password))
				{
					$login_errors['password'] = 'Your Password Must Contain At Least 1 Number';
				}
				else if(!preg_match("#[A-Z]+#", $password))
				{
					$login_errors['password'] = 'Your Password Must Contain At Least 1 Capital Letter';
				}
				else if(!preg_match("#[a-z]+#", $password))
				{
					$login_errors['password'] = 'Your Password Must Contain At Least 1 Lowercase Letter';
				}
				else
				{
					$password = mysqli_real_escape_string($link, $password);
					$sql = "SELECT id FROM users WHERE password='$password'";
					$result = mysqli_query($link, $sql);
					$result = mysqli_fetch_assoc($result);

					if (!$result)
					{
						$login_errors['password'] = 'Password is incorrect.';
					}
					else
					{
						$password_is_ok = 1;
					}
				}
			}
			else
			{
				$login_errors['password'] = 'Enter a password';
			}
		}
	}
	if ($email_is_ok && $password_is_ok)
	{
		// TODO
	}
