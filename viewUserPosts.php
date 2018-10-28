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

$auth = $_POST['u_id'];
$query = "SELECT content FROM posts where author_id ='".$auth."'";

if($result = $mysqli->query($query))
{
	echo "<table><th>POSTS BY: ".$auth."</th>";
	while ($row = $result->fetch_assoc()) 
	{
	// printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
	
		echo "<tr><td>".(string)$row['content']."</td></tr>\n";
	

	}
	echo "</table>";
	$result->free();
	
}

?>