<?php

include_once "db_connect.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
	<link rel="stylesheet" type="text/css" href="grid.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
		<div class="container">
			<div class="row">
<?
	$query_string = "SELECT * FROM `products` ORDER BY `productName`";
	$result = $conn->query($query_string);

	if($conn->errno) die($conn->error);

	while($row = $result->fetch_object()) {

?>     <!-- this is a template - a looping structure -->
	<div class="col-sm-4 product-item">
		<div class="product-listimage"><img src="<?= $row->main_image ?>" alt="main image">
		</div>
		<div class="product_title"><a href="product_item.php?id=<?= $row->id ?>"><?= $row->productName ?></a></div>
		<div class="product_price"><?= $row->price ?></div>
		<div class="product_description"><?= $row->description ?></div>
	</div>		
<?
} ?>
	</div>
  </div>


</body>
</html>











