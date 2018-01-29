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
	
$query = "CALL `showOrders`('";
$query.=$_SESSION['uid'];
$query.="');";

	$result = mysqli_query($sql, $query) or die("Connection error".mysqli_error($sql));
	while($row = mysqli_fetch_row($result)){
		$userOrders = array(
			"id" 		=> $row[0],
			"title"		=> $row[1],
			"game_key"	=> $row[2],
			"date"		=> $row[3],
			"price"		=> $row[4]
		);
		$userOrders_list[] = $userOrders;
	}
	$smarty->assign("userOrders_list", $userOrders_list);
	$smarty->assign("zalogowany", $_SESSION['valid']);
	$smarty->assign("user_type", $_SESSION['utype']);

	if($_SESSION['valid'])
	{
		echo $_SESSION['uid'];
	}


	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('userOrders.tpl');
	$smarty->display('_FOOTER.tpl');
?>