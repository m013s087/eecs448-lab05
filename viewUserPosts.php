<?php
$query = "SELECT user_id FROM users where author_id == $_POST["u_id"]";
printf("<table><th>Users</th>");
while ($row = $result->fetch_assoc()) {
	// printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
	
	printf("<tr><td> %s </td></tr>\n", (string)$row["content"]);
	$result->free();

}
printf("</table>");
?>