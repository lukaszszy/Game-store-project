<?php
	session_start();
	include("config/global.php");
	include("includes/functions.php");
	
	
	if(isset($_GET['gameid']) && $_SESSION['valid'] == 1){
		include("config/db.php");
		
		$query = "INSERT INTO `".$TABLE_BASKET."` (`userid`, `gameid`) VALUES 
			('".$_SESSION['uid']."', '".$_GET['gameid']."')";
		$result = mysqli_query($sql, $query) or die(mysqli_error($sql)." Error");
		Redirect('http://arenaskilla.pl/_Vasto_Lorde/TAS/basket.php');
	}
	else
		Redirect($WWW_URL);
?>