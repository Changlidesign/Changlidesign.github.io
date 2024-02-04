<?php

include_once "db_connect.php";

?>
   <?php include "headproduct.php"; ?>
</head>
<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
	<link rel="stylesheet" href="common.css">
	<link rel="stylesheet" href="grid.css">
	<link rel="stylesheet" href="product.css">

</head>
<body>
	<div class="container">
		<div class="grid">
			<div class="row gutters">
<?
	$query_string = "SELECT * FROM `products` ORDER BY `productName`";
	$result = $conn->query($query_string);

	if($conn->errno) die($conn->error);
	

	while($row = $result->fetch_object()) {

?>     <!-- this is a template - a looping structure -->
	
			
				
				<div class="col-sm-6 col-md-3">
					<div class="card">
						<div class="product">
						<img src="<?= $row->image ?>" alt="" class="media-image product-image">
							<div class="product-description">
								<div class="product-title">
									<a href="product_item.php?id=<?= $row->id ?>"><?= $row->productName ?>
								
									
									</a></div>

								</div></a>
							</div>
						</div>
					</div>
					
<?
} ?>
			</div>	
		</div>
	</div>	
	</div>
  </div>
<?php include "footer.php"; ?>	

</body>
</html>











