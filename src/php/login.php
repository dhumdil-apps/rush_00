<?php

	$login_errors = array();

	if (isset($_POST['email']))
	{
		$_SESSION['email'] = $_POST['email'];
	}

	if (isset($_POST['password']))
	{
		$_SESSION['password'] = $_POST['password'];
	}
