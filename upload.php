<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	

	$smarty->assign("zalogowany", $_SESSION['valid']);
	$smarty->assign("user_type", $_SESSION['utype']);
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('upload.tpl');
	$smarty->display('_FOOTER.tpl');
?>