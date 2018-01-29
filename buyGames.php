<?php
	session_start();
	include("config/global.php");
	include("includes/lang.php");
	include("includes/functions.php");

	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();

	
	if($_SESSION['valid'] == 1)
	{
		include("config/db.php");
		$query = "SELECT `TEST`('";
		$query .= $_SESSION['uid'];
		$query .= "');";
		$result = mysqli_query($sql, $query) or die(mysqli_error($sql)." Error");

		while($row = mysqli_fetch_row($result))
		{
		$status = $row[0];
		}
		
		if($status == 'TRUE') 
		{
			Redirect('http://arenaskilla.pl/_Vasto_Lorde/TAS/accepted.php');
		}
		else
		{
			Redirect('http://arenaskilla.pl/_Vasto_Lorde/TAS/notaccepted.php');
		}
	
	}
	else
		Redirect($WWW_URL);
?>