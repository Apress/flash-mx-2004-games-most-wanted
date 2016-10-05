<?php

// loginUser.php //
// login a user

include "connect_db.inc.php";

$query = "SELECT username, password, winnings FROM horses WHERE username = '$userInput'";
$result = mysql_query ($query);

$rownums = mysql_num_rows ($result);

if ($rownums > 0) {
	$query_data = mysql_fetch_array ($result);
	
	if ($passInput == $query_data["password"]) {
		echo "&result=loggedin";
		//
		$storedMoney = $query_data["winnings"];
		echo "&money=$storedMoney";
	} else {
		echo "&result=wrongpassword";
	}
} else {
	echo "&result=nouser";
}
		
?>