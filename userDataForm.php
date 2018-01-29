<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();

	//Koszyk
	if($_SESSION['valid']){
		$query1 = "SELECT sum(tas_games.Price), count(tas_basket.gameid) FROM tas_games INNER JOIN tas_basket ON tas_basket.gameid = tas_games.Game_ID WHERE tas_basket.userid = ".$_SESSION['uid'].";";
		$result = mysqli_query($sql, $query1) or die("Connection error".mysqli_error($sql));
		if($row = mysqli_fetch_row($result)){
			$smarty->assign("basket_cost", round($row[0], 2));
			$smarty->assign("basket_count", $row[1]);
		}
	}
	//
	
	if($_SESSION['valid'] == 1){

	$query = "CALL `showUserData`('";
	$query.=$_SESSION['uid'];
	$query.="');";

		$result = mysqli_query($sql, $query) or die("Connection error".mysqli_error($sql));
		while($row = mysqli_fetch_row($result)){
			$userData = array(
				"name" 		=> $row[0],
				"surname"	=> $row[1],
				"email"		=> $row[2],
				"phone"		=> $row[3],
				"login"		=> $row[4],
				"password"	=> $row[5],
				"account"	=> $row[6],
				"address"	=> $row[7],
				"town"		=> $row[8],
				"zipcode"	=> $row[9]
			);
			$userData_list[] = $userData;
		}
		$smarty->assign("userData_list", $userData_list);
	}
	else
		Redirect($WWW_URL);

	$smarty->assign("zalogowany", $_SESSION['valid']);
	$smarty->assign("user_type", $_SESSION['utype']);

	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('userDataForm.tpl');
	$smarty->display('_FOOTER.tpl');
?>