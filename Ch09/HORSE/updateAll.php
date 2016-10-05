<?php

// updateAll.php //
// update a number of fields in the database // 

include "connect_db.inc.php";
	
// update winnings //

$winquery = "UPDATE horses SET winnings = $cash WHERE username = '$userdata';";
$winreturned = mysql_query ($winquery);
		
// update races run by 1 //
		
if ($racenum > 0) {
	$racequery = "UPDATE horses SET racesrun = racesrun + $racenum WHERE username = '$userdata';";
	$runreturned = mysql_query ($racequery);
}
		
// update won races by 1 //
		
if ($wonraces > 0) {
	$wonquery = "UPDATE horses SET raceswon = raceswon + $wonraces WHERE username = '$userdata';";
	$wonreturned = mysql_query ($wonquery);
}

?>