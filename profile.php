<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	include("includes/functions.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	
	if($_SESSION['valid'] == 1){
		$query = "SELECT * FROM `tas_users` WHERE User_ID = '".$_SESSION['uid']."';";
		$result = mysqli_query($sql, $query) or die("Connection error".mysqli_error($sql));
		if($row = mysqli_fetch_row($result)){
			$smarty->assign("usr_nazwa", $row[1]);
			$smarty->assign("usr_surnazwa", $row[2]);
			$smarty->assign("usr_login", $row[5]);
			$smarty->assign("usr_email", $row[3]);
			$smarty->assign("usr_phone", $row[4]);
			$smarty->assign("usr_adress", $row[8]);
			$smarty->assign("usr_town", $row[9]);
			$smarty->assign("usr_zip", $row[10]);
		}
	}
	else
		Redirect($WWW_URL);
	
	$smarty->assign("zalogowany", $_SESSION['valid']);
	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('profile.tpl');
	$smarty->display('_FOOTER.tpl');
	
?>