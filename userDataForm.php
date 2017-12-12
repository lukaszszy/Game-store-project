<?php
	session_start();
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();

	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('userDataForm.tpl');
	$smarty->display('_FOOTER.tpl');
?>