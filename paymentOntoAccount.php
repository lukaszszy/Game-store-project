<?php
	session_start();
	include("config/global.php");
	include("includes/functions.php");
	

		include("config/db.php");
		$price = stripslashes($_POST["price"]);	
		$query = "CALL `paymentOntoAccount`('";
		$query .= $_SESSION['uid'];
		$query .= "','";
		$query .= $price;
		$query .= "');";
	
	$result = mysqli_query($sql, $query) or die(mysqli_error($sql)." Error");
	Redirect('http://arenaskilla.pl/_Vasto_Lorde/TAS/paymentForm.php');

?>