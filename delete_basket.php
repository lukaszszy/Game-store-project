<?php
	session_start();
	include("config/global.php");
	include("includes/functions.php");
	
	
	if(isset($_GET['id']) && $_SESSION['valid'] == 1)
	{
		include("config/db.php");
		
	$query = "CALL `deleteFromBasket`('";
	$query .= $_SESSION['uid'];
	$query .= "','";
	$query .= $_GET['id'];
	$query .= "');";

		$result = mysqli_query($sql, $query) or die(mysqli_error($sql)." Error");
		Redirect('http://arenaskilla.pl/_Vasto_Lorde/TAS/basket.php');
	}
	else
		Redirect($WWW_URL);
?>