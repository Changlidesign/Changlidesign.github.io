<?php

$prodname = $_POST["prodname"];
$price = $_POST["price"];
$description = $_POST["description"];
$size = $_POST["size"];

    include('dbcontroller.php');  

$sql = "INSERT INTO products (productName, price, description, sizes) 
			VALUES ('$prodname', '$price', '$description', '$size')";

if(mysqli_query($link, $sql)){
	
	// Close connection
    mysqli_close($link);
    
    include('add_product_form.php');
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

?>