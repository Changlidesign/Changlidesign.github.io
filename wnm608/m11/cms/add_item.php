<?php

require_once('dbConnection.php');

// $date_create = date("Y-m-d\TH:m:s");
// $date_modify = date("Y-m-d\TH:m:s");
$item = $_POST['item'];
$description = $_POST['description'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

if ($_FILES['mainImage']['name']) {

	$mainImage =  $_FILES['mainImage']['name'];
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["mainImage"]["name"]);

	if (move_uploaded_file($_FILES['mainImage']['tmp_name'], $target_file)) {
	  
	} else {
	    echo "Possible file upload attack!\n";
	}
}

if ($_FILES['images']['name']) {

	$image = implode(",",$_FILES['images']['name']);
	
	for( $i=0 ; $i < count($_FILES['images']['name']) ; $i++ ) {

	  	$tmpFilePath = $_FILES['images']['tmp_name'][$i];
		
		$target_dir = "images/";
	  	if ($tmpFilePath != ""){
		    $newFilePath = $target_dir . basename($_FILES['images']['name'][$i]);
		    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
			} else {
			    echo "Multiple file upload attack!\n";
		    }
		  }
	}
}

$sql = "INSERT INTO product (item, description, quantity, main_image, price, category, images) VALUES ('$item', '$description', '$quantity', '$mainImage', '$price', '$category', '$image')";

if(mysqli_query($link, $sql)){
    
    // Close connection
    mysqli_close($link);
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

    
    include('index.php');

?>