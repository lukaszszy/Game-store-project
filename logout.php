<?php
	session_start();
	include("config/global.php");
	include("includes/functions.php");
	
	$_SESSION['valid'] = false;
	$_SESSION['uid'] = -1;
	$_SESSION["sid"] = -1;

	Redirect($WWW_URL);
?>