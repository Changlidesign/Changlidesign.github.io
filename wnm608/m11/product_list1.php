<?php

include_once "lib/php/print_o.php";
include_once "db_connect.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
	<div class="row">
<?php 

$query_string = "SELECT * FROM `products` ORDER BY `title` LIMIT 12";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

while($row = $result->fetch_object()){
	// print_o($row);
	?>
	<div class="col-sm-6 product-item">
		<div class="product-listimage"><img src="images<?= $row->main_image ?>"></div>
		<div class="product-title"><a href="product_item.php?id=<?= $row->id ?>"><?= $row->title ?></a></div>
		<div class="product-price">$<?= $row->price ?></div>
		<div class="product-description"><?= $row->description ?></div>
	</div>
	<?php
}

 ?>
	</div>
</div>
	
</body>
</html>