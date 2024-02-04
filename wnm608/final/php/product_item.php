<?php
include_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link href="detail.css" rel="stylesheet">
	<meta name="robots" content="noindex,follow" />
	<meta charset="UTF-8">
	<title>Product List</title>
	<link rel="stylesheet" href="common.css">
	<link rel="stylesheet" href="grid.css">
</head>

<body>
	<?php include "header.php"; ?>	
	<main class="container">

<?php 

if(!isset($_GET['id'])) {
	echo "You borked it";
} else {

	if(isset($_POST['addtocart'])) {
		$id = $_GET['id'];
		$addtocart = $_POST['addtocart'];

		$sql = "UPDATE products 
                SET 
                  cart = $addtocart              
                WHERE 
                  id = $id";
                
       	if (mysqli_query($conn, $sql)) {
       	} else {
          	echo "Error updating record: " . mysqli_error($conn);
       	}
       // mysqli_close($conn);
	} 

	$query_string = "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'";
	$result = $conn->query($query_string);

	if($conn->errno) die($conn->error);

	$row = $result->fetch_object();
?>

		<div class="left-column">
			<img data-image="black" src="<?= $row->image ?>" alt="">
			<img data-image="blue" src="<?= $row->image ?>" alt="">
        	<img data-image="red" class="active" src="<?= $row->image ?>" alt="">
		</div>
		
		<div class="right-column">
			<div class="product-description">
				<span>YIMI Products</span>
          		<h1><?= $row->productName ?></h1>
			</div>
			<div class="product-description">
				<div class="product-price">
          		<span><?= '$'.$row->price ?></span>
				</div>
				<p class="description"><?= $row->description ?></p>
			</div>
			<iframe name="votar" style="display:none;"></iframe>
			<form method="post" target="votar">
				<select name="addtocart" class="cart-btnn">
		    		<option value="1">1</option>
		    		<option value="2">2</option>
		    		<option value="3">3</option>
		    		<option value="4">4</option>
		    		<option value="5">5</option>
		    		<option value="6">6</option>
		    		<option value="7">7</option>
		    		<option value="8">8</option>
		  		</select>
		  		<input type="submit" value="Add to Cart" class="cart-btn">
			</form> 
		</div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="detail.js" charset="utf-8"></script>
	<?php 
}
?>

</body>
</html>