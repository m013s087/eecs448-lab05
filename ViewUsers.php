<?php
$query = "SELECT user_id FROM users where *";
while ($row = $result->fetch_assoc()) {
	// printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
	printf("<table><th>Users</th>");
	if($_POST["U_id"] ==$row["user_id"])
	{
		printf("<tr><td> %s </td></tr>\n", (string)$row["user_id"]);
		$result->free();
		exit();
	}
	printf("</table>");
}
?>