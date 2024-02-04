<?php

$prodname = $_POST["prodname"];
$price = $_POST["price"];
$description = $_POST["description"];
$size = implode(",",$_POST["size"]);
$image = $_POST["image"];

    include('dbcontroller.php');  

$sql = "INSERT INTO products (productName, price, description, size, image) 
			VALUES ('$prodname', '$price', '$description', '$size', '$image')";

if(mysqli_query($link, $sql)){
	
	// Close connection
    mysqli_close($link);
    
    include('add_product_form.php');
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

?>