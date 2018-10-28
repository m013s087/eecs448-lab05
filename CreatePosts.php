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
$user = $_POST["u_id"];
$content = $_POST["content"];
$query = "SELECT user_id FROM users where user_id='".$user."'";

if ($result=$mysqli->query($query)  ) 
{
    $row_cnt = $result->num_rows;
    if($content!="" && $user!="" && $row_cnt!=0)
    {
        $query = "INSERT INTO posts (author_id,content) VALUES ('".$user."','".$content."')";
        if($mysqli->query($query))
        {
            echo "Post Added";
        }
        else
        {
            echo "Post Failed";
        }
    }
    else
    {
        echo "Invalid Field";
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>