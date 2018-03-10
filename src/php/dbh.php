<?php

$conn = mysqli_connect("localhost", "root", "", "users"); //DB info (host,un,pwd,name of DB)

// show up error message <use it just for test> if you dont want to be hacked ^_^
if (!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
