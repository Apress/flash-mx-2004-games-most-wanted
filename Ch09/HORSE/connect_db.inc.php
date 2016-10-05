<?php

// connect_db.inc.php //
// login to database //

include "common_db.inc.php";

$link = mysql_connect ($dbhost, $dbusername, $dbuserpassword);

if (!$link) {
	echo "&result=noconnection";
} else {
	mysql_select_db($dbname);
}
	
	

?>
