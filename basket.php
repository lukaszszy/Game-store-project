<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	include("includes/functions.php");
	
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

$query = "CALL `userBasket`('";
$query.=$_SESSION['uid'];
$query.="');";

		$result = mysqli_query($sql, $query) or die("Connection error".mysqli_error($sql));
		while($row = mysqli_fetch_row($result)){
			$game = array(
				"id"		=> $row[0],
				"game_id"	=> $row[1],
				"title"		=> $row[2],
				"company"	=> $row[3],
				"price"		=> $row[4]
			);
			$game_list[] = $game;
			$size = count($game_list);
		}
		$smarty->assign("game_list", $game_list);
		$smarty->assign("size", $size);
		$smarty->assign("zalogowany", $_SESSION['valid']);
		
		
	}
	else
		Redirect($WWW_URL);
		
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('basket.tpl');
	$smarty->display('_FOOTER.tpl');
	
?>