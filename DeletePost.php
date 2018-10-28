<?php 

	if(count($del = $_POST['del'])!=0)
	{
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
		$ids = implode(",",$del);
		// echo "ID's: ".$ids;
		
    	$mysqli = new mysqli("mysql.eecs.ku.edu", "m013s087", "aequa3Ke", "m013s087");
		/* check connection */
		if ($mysqli->connect_errno) 
		{
    		echo "Connect failed: ".$mysqli->connect_error."\n";
    		exit();
		}   
		$query = "DELETE FROM posts WHERE post_id IN ('".$ids."')";

		if($mysqli->query($query))
		{
	   		echo "Deleted posts: ".$ids;
		}
		else
		{
			echo "Deletion failed";
		}
		$mysqli->close();
	}
	else
	{
		echo "Please select a post to delete";
	}
	echo "<br><a href='DeletePost.html'>RETURN</a>";
	echo "<br><a href='AdminHome.html'>ADMIN</a>";
?>