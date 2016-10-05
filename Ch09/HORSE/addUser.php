<?php

// addUser.php //
// adds a users details to the database //

include "connect_db.inc.php";

$query = "SELECT username FROM horses WHERE username = '$userInput'";
$returned = mysql_query ($query);

$rownums = mysql_num_rows ($returned);

if ($rownums > 0) {
	echo "&result=userexists";

} else {

	$query = "INSERT INTO horses (username, password, winnings, registerdate) VALUES ('$userInput','$passInput', 200, NOW());";

	if (mysql_query ($query)) {
		echo "&result=added";
	} else {
		echo "&result=notadded";
	}
} 
	
?>