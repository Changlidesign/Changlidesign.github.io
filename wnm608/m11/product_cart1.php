<?php


include_once "lib/php/print_o.php";
include_once "db_connect.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
</head>
<body>

	<div class="container">
<?php 

$query_string = "SELECT * FROM `products` WHERE `id` IN(9,13,34)";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

while($row = $result->fetch_object()){
	$amount = rand(2,7);
	?>
		<div class="product-title"><?= $row->title ?></div>
		<div class="product-amount"><?= $amount ?></div>
		<div class="product-price">$<?= $row->price ?></div>
		<div class="product-description"><?= $row->description ?></div>
		<div class="product-total">$<?= ($row->price * $amount) ?></div>
		<hr>
	<?php
}
?>
	</div>
	<div>
		<a href="product_list.php">Back</a>
	</div>
	
</body>
</html>