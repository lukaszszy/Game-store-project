<?php
	session_start();
	include("config/global.php");
	include("config/functions.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	
	if(isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["securityq"])){
		include("config/db.php");
		echo 'sesyjka hehe';
		$name = stripslashes($_POST["name"]);
		$password = stripslashes($_POST["password"]);
		
		$query = "SELECT User_ID FROM `".$TABLE_USERS."` WHERE `Login` = '".$name."' AND `Password` = '".$password."'";
		$result = mysqli_query($sql, $query);
		
		if($result === FALSE){
			$info = "Błąd połączenia 1! Skontaktuj się z Administracją w celu rozwiązania problemu!";
		}
		if(mysqli_num_rows($result) == 0){
			$info = "Niepoprawny nick lub hasło!";
		}
		if($info == "")
			if($row = mysqli_fetch_row($result)){
				$_SESSION['valid'] = true;
				$_SESSION['uid'] = $row[0];
				$_SESSION["sid"]=session_id();
				
				print_r($_SESSION);
			}
	}
	
	if($_SESSION['valid']){
		echo "jestes zalgowany";
	}
	
	$smarty->assign("info", $info);
	$smarty->assign("SHOP_URL", $SHOP_URL);
	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('login.tpl');
	$smarty->display('_FOOTER.tpl');
?>