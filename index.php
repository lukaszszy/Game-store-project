<?php
	session_start();
	include("config/global.php");
	include("config/db.php");
	include("includes/lang.php");
	
	////Smarty 
	require_once("smarty/libs/Smarty.class.php");
	$smarty=new Smarty();
	
	$query = "SELECT id_category, name FROM `tas_categories`;";
	$result = mysqli_query($sql, $query) or die("Connection error".mysqli_error($sql));
	while($row = mysqli_fetch_row($result)){
		$category = array(
			"id"		=> $row[0],
			"name"		=> $row[1]
		);
		$category_list[] = $category;
	}
	$smarty->assign("category_list", $category_list);
	
	if($_SESSION['valid']){
		echo "jestes zalgowany";
	}
	
	////Display HTML
	$smarty->display('_HEADER.tpl');
	$smarty->display('index.tpl');
	$smarty->display('_FOOTER.tpl');
?>