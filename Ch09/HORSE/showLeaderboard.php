<?php

// showLearboard.php //
// report top 20 players according to score //

include "connect_db.inc.php";

$query = "SELECT * FROM horses ORDER BY winnings DESC LIMIT 0, 20;";
$result = mysql_query ($query);
		
$count = 0;
		
echo "&result=okay";
		
while ($query_data = mysql_fetch_array ($result)) {
	
	$player = $query_data ["username"];
	$cash = $query_data ["winnings"];
	$wins = $query_data ["raceswon"];
	$races = $query_data ["racesrun"];
			
	if ($wins > 0 && $races > 0) {
		$winratio = ($wins / $races) * 100;
		$winratio = number_format($winratio, 1);
		
		echo "&player$count=$player";
		echo "&cash$count=$cash";
		echo "&winratio$count=$winratio";
		
		$count++;
	}
}
		
echo "&rows=$count";
		
?>