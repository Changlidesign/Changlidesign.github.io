<?php

include "db_connect.php";

$orderby = (isset($_GET['orderby'])) ?
	" ORDER BY `".$_GET['orderby']."` ".$_GET['direction']:
	" ORDER BY `date_create`";


//$sql = "SELECT * FROM `products`";  // show each example
$sql = "SELECT * FROM `products` $orderby";
// $sql = "SELECT * FROM `products` $orderby LIMIT 12";

$result = $conn->query($sql);

if($conn->errno) die($conn->error);

$output = array();
while($row = $result->fetch_object()) {
	// array_push($output,$row);
	$output[] = $row;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
die;