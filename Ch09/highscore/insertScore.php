<?php

// insertScore.php //
// inserts a players name and score into the database //

// set database data //

$dbhost = "";
$dbusername = "";
$dbuserpassword = "";
$dbname = "mostwanted";

// connect to database //

$link = mysql_connect ($dbhost, $dbusername, $dbuserpassword);

if (!$link) {
	echo "&result=noconnection";
} else {
	mysql_select_db($dbname);
}

// temporary data - comment out when using SWF //

$scoreOutput = 1500;
$playerOutput = "Eric";

// create query //

$query = "INSERT INTO highscore (score, player) VALUES ('$scoreOutput', '$playerOutput');";

// run query and check success //
// result is outputted //

if (mysql_query ($query)) {
	echo "&result=added";
} else {
	echo "&result=notadded";
}

?>