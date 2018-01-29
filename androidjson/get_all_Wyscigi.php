<?php
 
/*
 * Following code will list all the products
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// get all products from products table
$result = mysql_query("SET NAMES UTF8;");
$result = mysql_query("CALL viewByCategory('Wyscigi');") or die(mysql_error());
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["products"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $product = array();
        $product["Game_ID"] = $row["Game_ID"];
        $product["name"] = $row["Title"];
        $product["price"] = $row["Price"];
		$product["description"] = $row["Description"];
		$product["company"] = $row["Company"];
        //$product["created_at"] = $row["created_at"];
 
        // push single product into final response array
        array_push($response["products"], $product);
    }
    // success
    //$response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    //$response["success"] = 0;
    $response["message"] = "No products found";
 
    // echo no users JSON
    echo json_encode($response);
}
?>