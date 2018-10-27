<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
$mysqli = new mysqli("mysql.eecs.ku.edu", "m013s087", "aequa3Ke", "m013s087");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user = $_POST["u_id"];
$content = $_POST["content"];
$query = "SELECT user_id FROM users where user_id='".$user."'";

if ($mysqli->query($query)) {

    if($_POST["content"]!="")
    {
        $query = "INSERT INTO posts (author_id,content) VALUES ('".$user."','".$content."')";
        if($mysqli->query($query))
        {
            echo "Post Added";
        }
    }

    /* free result set */
    // $result->free();
}

/* close connection */
$mysqli->close();
?>