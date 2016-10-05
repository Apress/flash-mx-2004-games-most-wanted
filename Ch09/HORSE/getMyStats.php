<?php

// getMyStats.php //
// get users stats //

include "connect_db.inc.php";

$query = "SELECT * FROM horses WHERE username = '$userdata';";
$result = mysql_query ($query);

$query_data = mysql_fetch_array ($result);
		
$player = $query_data ["username"];
$cash = $query_data ["winnings"];
$wins = $query_data ["raceswon"];
$races = $query_data ["racesrun"];
$bankrupts = $query_data ["bankrupts"];
$startDate = $query_data ["registerdate"];
			
echo "&player=$player";
echo "&cash=$cash";
echo "&wins=$wins";
echo "&races=$races";
echo "&startDate=$startDate";
echo "&bankrupts=$bankrupts";
	
echo "&result=okay";

?>