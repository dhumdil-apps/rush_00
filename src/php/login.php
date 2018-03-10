<?php

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
