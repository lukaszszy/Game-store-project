<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	

	if(!!$_FILES['file']['tmp_name']){
		$allow = array("jpg", "jpeg", "gif", "png");
		$todir = 'uploads/';
		$info = explode('.', strtolower( $_FILES['file']['name']) );

		if(in_array(end($info), $allow))
			if(move_uploaded_file( $_FILES['file']['tmp_name'], $todir . basename($_FILES['file']['name'] ) ) )
				{}
			else
				echo 'error2';
		else
			echo 'error1';
	}
	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('upload.tpl');
	$smarty->display('_FOOTER.tpl');
?>