<?php
	session_start();
	include("config/global.php");
	include("includes/functions.php");
	
	include("config/db.php");
	
	$selected_id = stripslashes($_POST["selected_id"]);	
	$selected_codes = stripslashes($_POST["selected_codes"]);

	$pieces = explode(",", $selected_codes);

	$query1 = " INSERT INTO `tas_keys`(`Game_key`, `Game_ID`) VALUES ";
	foreach ($pieces as $value) 
	{
    		$query1 .= "('";
		$query1 .= $value;
		$query1 .= "','";
		$query1 .= $selected_id;
		$query1 .= "'),";
	}
	$query1 = substr($query1, 0, -1);
	$query1 .= ";";
	$result1 = mysqli_query($sql, $query1) or die(mysqli_error($sql)." Error");

	$query2 = "UPDATE `tas_games` SET `free_keys`= number_of_free_keys(`tas_games`.`Game_ID`);";
	$result2 = mysqli_query($sql, $query2) or die(mysqli_error($sql)." Error");


?>