<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "m013s087", "my_password", "m013s087");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM users where *";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        // printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
        if($_POST["u_id"] ==$row["user_id"])
        {
            printf("User already exists\n");
            $result->free();
            exit();
        }
    }
    $query = "INSERT INTO users (user_id) VALUES ($_POST["u_id"])";
    if($result = $mysqli->query($query))
    {
        printf("User Added");
    }
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>