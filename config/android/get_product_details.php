<?php
 
/*
 * Following code will get single product details
 * A product is identified by product id (Game_ID)
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// check for post data
if (isset($_GET["Game_ID"])) {
    $Game_ID = $_GET['Game_ID'];
 
    // get a product from products table
    $result = mysql_query("SET NAMES UTF8;");
	//$result = mysql_query ("SET CHARACTER_SET utf8_unicode_ci");
    $result = mysql_query("SELECT *FROM tas_games WHERE Game_ID = $Game_ID");
 
    if (!empty($result)) {
        // check for empty result
        if (mysql_num_rows($result) > 0) {
 
            $result = mysql_fetch_array($result);
 
            $product = array();
            $product["Game_ID"] = $result["Game_ID"];
            $product["name"] = $result["Title"];
            $product["price"] = $result["Price"];
            $product["description"] = $result["Description"];
            // success
            $response["success"] = 1;
 
            // user node
            $response["product"] = array();
 
            array_push($response["product"], $product);
 
            // echoing JSON response
            echo json_encode($response);
        } else {
            // no product found
            $response["success"] = 0;
            $response["message"] = "No product found";
 
            // echo no users JSON
            echo json_encode($response);
        }
    } else {
        // no product found
        $response["success"] = 0;
        $response["message"] = "No product found";
 
        // echo no users JSON
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}
?>