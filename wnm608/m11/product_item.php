<?php

include_once "db_connect.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 

if(!isset($_GET['id'])) {
	echo "You borked it";
} else {

	$query_string = "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'";
	$result = $conn->query($query_string);

	if($conn->errno) die($conn->error);

	$row = $result->fetch_object();

	// the explode function makes an array
	$exploded_images = explode(",",$row->image);

	// show the data after it's all ready
	?>
	<div class="container">
		<div class="product-title"><?= $row->title ?></div>
		<div class="product-price">$<?= $row->price ?></div>
		<div class="product-mainimage"><img src="<?= $row->main_image ?>"></div>
		<div class="product-otherimages">
		<?php
		foreach($exploded_images as $image) {
			echo "<img src='$image'>";
			
		}
		?>
		</div>
		<div class="product-description"><?= $row->description ?></div>
	</div>
	<div>
		<a href="product_list.php">Back</a>
	</div>
	<?php 
}
?>
	
</body>
</html>