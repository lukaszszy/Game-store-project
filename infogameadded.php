<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	
	$smarty->display('_HEADER.tpl');
	$smarty->display('infogameadded.tpl');
	$smarty->display('_FOOTER.tpl');
	
?>