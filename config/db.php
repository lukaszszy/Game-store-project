<?php
	//SQL
	$SQL_HOSTNAME = "localhost";
	$SQL_DATABASE = "fokavast_TAS2017";
	$SQL_USERNAME = "fokavast_TAS2017";
	$SQL_PASSWORD = "tujestukrytehaslo";
	
	$TABLE_GAMES = "tas_games";
	$TABLE_IMAGES = "tas_games";
	$TABLE_ORDERS = "tas_orders";
	$TABLE_PAYMENTS = "tas_payments";
	$TABLE_SHIPMENTS = "tas_shipments";
	$TABLE_USERS = "tas_users";
	$TABLE_BASKET = "tas_basket";
	
	$sql = mysqli_connect($SQL_HOSTNAME, $SQL_USERNAME, $SQL_PASSWORD, $SQL_DATABASE) or die("Did not connect ".mysqli_connect_error());
	
	$query = "SET NAMES UTF8;";
	$result = mysqli_query($sql, $query) or die("Connection error".mysqli_error($sql));
?>
