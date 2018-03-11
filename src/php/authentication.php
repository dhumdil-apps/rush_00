<?php

	$email_is_ok = 1;

	// Validate email
	if (isset($_POST["email"]))
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$login_errors['email'] = 'Email format is invalid.';
			$email_is_ok = 0;
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
		if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"]))
		{
			$password = test_input($_POST["password"]);
			$cpassword = test_input($_POST["cpassword"]);

			if (strlen($_POST["password"]) <= '8')
			{
				$passwordErr = "Your Password Must Contain At Least 8 Characters!";
			}
			elseif(!preg_match("#[0-9]+#",$password))
			{
				$passwordErr = "Your Password Must Contain At Least 1 Number!";
			}
			elseif(!preg_match("#[A-Z]+#",$password))
			{
				$passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
			}
			elseif(!preg_match("#[a-z]+#",$password))
			{
				$passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
			}
		}
		elseif(!empty($_POST["password"])) {
			$cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
		} else {
		 	$passwordErr = "Please enter password   ";
		}
	}


if (!empty($_POST['email']))
	$email = mysql_real_escape_string($_POST['email']);

if(empty($_POST['email']) || empty($_POST['password'])) {
	$error = "Email or Password is invalid.";
}
else {
	$password = mysql_real_escape_string($_POST['password']);
	$result = $db->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
	$rows = mysqli_num_rows($result);
	if($rows == 1) {
		$_SESSION['email'] = $email;
		header('Location: index.php');
	}
	else {
		$error = "Email or Password is invalid.";
	}
}
if($_SESSION['email'] == $email){
	$result = $db->query("SELECT id FROM users WHERE email='$email'");
		while($row = $result->fetch_object()) {
			$_SESSION['id'] =  $row->id;
		}
}

include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo("Username or Password is incorrect!");
	header("Location: ../../index.php");
} else {
	header("Location: ../htmlPages/main.html");
}
