<?php

// incrementBankrupt.php //
// add one to bankrupts value /

include "connect_db.inc.php";

$query = "UPDATE horses SET bankrupts = bankrupts + 1 WHERE username = '$userdata';";
$result = mysql_query ($query);
		
if (!$result) {
	echo "&result=error";
}
	
?>