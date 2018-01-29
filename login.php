<?php
	session_start();
	include("config/global.php");
	include("includes/functions.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	
	if(isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["securityq"]))
	{
		include("config/db.php");
		$name = stripslashes($_POST["name"]);
		$password = stripslashes($_POST["password"]);
		
		//name
		if(!preg_match("/^[a-zA-Z\d]+$/", $name)) {
			$info = "Login powinien zawierać tylko litery i cyfry!";
		}
		//pass
		if(strlen($_POST["password"]) < 8) {
			$info = "Hasło powinno mieć co najmniej 8 znaków!";
		}
		if($info == "")
		{
			$query = "SELECT User_ID, user_type FROM `".$TABLE_USERS."` WHERE `Login` = '".$name."' AND `Password` = '".$password."'";
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
					$_SESSION['utype'] = $row[1];
					$_SESSION["sid"]=session_id();
					
					print_r($_SESSION);
				}
		}
	}
	
	if($_SESSION['valid']){
		Redirect($WWW_URL);
	}
	
	$smarty->assign("info", $info);
	$smarty->assign("SHOP_URL", $SHOP_URL);
	
	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('login.tpl');
	$smarty->display('_FOOTER.tpl');
?>