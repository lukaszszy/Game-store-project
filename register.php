<?php
	session_start();
	include("config/global.php");
	include("config/functions.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	
	if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["cpassword"]) && isset($_POST["agree"]) && isset($_POST["securityq"])){
		$info = "";
		//email
		if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$info = "Nieprawidłowy email!";
		}
		//name
		if(!preg_match("/^[a-zA-Z\d]+$/", $_POST["name"])) {
			$info = "Login powinien zawierać tylko litery i cyfry!";
		}
		//pass
		if(strlen($_POST["password"]) < 8) {
			$info = "Hasło powinno mieć co najmniej 8 znaków!";
		}
		if($_POST["cpassword"] != $_POST["password"]){
			$info = "Hasła nie są identyczne!";
		}
		//agree
		if($_POST["agree"] != "on"){
			$info = "Musisz zaakceptować regulamin!";
		}
		//securityq
		if($_POST["securityq"] != "4" && $_POST["securityq"] != "cztery"){
			$info = "Nieprawidłowa odpowiedź na pytanie!";
		}
		if($info == ""){
			include("config/db.php");
			
			$name = stripslashes($_POST["name"]);
			$email = stripslashes($_POST["email"]);
			
			$query = "SELECT name, email FROM `".$TABLE_USERS."` WHERE `Login` = '".$name."' OR `Email` = '".$email."'";
			$result = mysqli_query($sql, $query) or die(mysqli_error($sql)." Błąd połączenia 1! Skontaktuj się z Administracją w celu rozwiązania problemu!");
			
			if(mysqli_num_rows($result)){
				$info = "Taki nick lub email istnieje juz w sklepie!";
			}
			
			if($info == ""){
				$password = stripslashes($_POST["password"]);
				
				$query = "INSERT INTO `".$TABLE_USERS."` (`Name`, `Surname`, `Email`, `Phone`, `Login`, `Password`, `Account`, `Address`, `Town`, `ZipCode`) VALUES 
					('','', '".$email."', '', '".$name."', '".$password."', '0', '', '', '')";
				$result = mysqli_query($sql, $query) or die(mysqli_error($sql)." Błąd połączenia 2! Skontaktuj się z Administracją w celu rozwiązania problemu!");
			}
			
		}
	}
	else
		$info = "Nie wszystkie pola zostały wypełnione!";
	$smarty->assign("info", $info);
	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('register.tpl');
	$smarty->display('_FOOTER.tpl');
?>