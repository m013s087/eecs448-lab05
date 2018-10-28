<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
$mysqli = new mysqli("mysql.eecs.ku.edu", "m013s087", "aequa3Ke", "m013s087");

/* check connection */
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$user = $_POST["u_id"];
$query = "INSERT INTO users (user_id) VALUES ('" . $user ."')";
if($mysqli->query($query))
{
    echo "User Added";
}
else
{
    echo "Duplicate user";
}

/* close connection */
$mysqli->close();
?>