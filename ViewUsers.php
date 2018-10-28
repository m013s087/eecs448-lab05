<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
$mysqli = new mysqli("mysql.eecs.ku.edu", "m013s087", "aequa3Ke", "m013s087");

/* check connection */
if ($mysqli->connect_errno) 
{
	echo "Connect failed: ".$mysqli->connect_error."\n";
	exit();
}   

$query = "SELECT user_id FROM users";
echo "<table><th>USERS</th>";
if($result = $mysqli->query($query))
{
	while ($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>".(string)$row['user_id']."</td></tr>\n";
	}
	echo "</table>";
	$result->free();
}
$mysqli->close();
?>