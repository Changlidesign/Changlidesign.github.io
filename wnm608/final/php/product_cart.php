<?php
// include_once "lib/php/print_o.php";
include_once "db_connect.php";
$delete = $_POST['delId'];

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
</head>
<body>

	<div class="container">
<?php 

if($delete) {
$query_string = "UPDATE `products` SET cart = 0 WHERE `id` = $delete";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

}
// $query_string = "SELECT * FROM `products` WHERE `id` IN(9,13,34)";
$query_string = "SELECT * FROM `products` WHERE `cart` > 0";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

while($row = $result->fetch_object()){
	// $amount = rand(2,7);  // amount is random
	?>
		<div class="product-title"><?= $row->productName ?></div>
		<div class="product-amount"><?= $row->cart ?></div>
		<div class="product-price">$<?= $row->price ?></div>
		<div class="product-description"><?= $row->description ?></div>
		<div class="product-total">$<?= ($row->price * $row->cart) ?></div>
		<? $total += $row->price * $row->cart; ?>
		<form method="post">
			<input type="submit" name="submit" value="delete">
			<input type="hidden" name="delId" value="<?= $row->id ?>">
		</form>
		<hr>
	<?php
}
?>
	<div>Total:</div>
	<div>$<?= $total ?></div>
	</div>
	<div>
		<a href="product_list.php">Back</a>
	</div>
	
</body>
</html>




