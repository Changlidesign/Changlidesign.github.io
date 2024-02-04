<?php

    require_once('dbConnection.php');

$itemId = $_POST["itemId"];
$date_modify = date("Y-m-d\TH:m:s");
$item = $_POST['item'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$category = $_POST['category'];

if ($_FILES['mainImage']['name']) {

  $file=$_FILES['mainImage']['name'];
  $path="images/store/".$file;
  if(file_exists($path)) 
  {
    chmod($path,0755); 
    unlink($path);
  }

  $mainImage =  $_FILES['mainImage']['name'];
  $target_dir = "images/store/";
  $target_file = $target_dir . basename($_FILES["mainImage"]["name"]);

  if (move_uploaded_file($_FILES['mainImage']['tmp_name'], $target_file)) {
    
  } else {
      echo "Possible file upload attack!\n";
  }
} else {
      $mainImage =  $_POST['hiddenmainimage'];
  }


if (0 < $_FILES['images']['size'][0]) {

    $image = implode(",",$_FILES['images']['name']);

    for( $i=0 ; $i < count($_FILES['images']['name']) ; $i++ ) {

        $file=$_FILES['images']['name'][$i];
        $path="images/store/".$file;
        if(file_exists($path)) 
        {
            chmod($path,0755); 
            unlink($path);
        }

        $tmpFilePath = $_FILES['images']['tmp_name'][$i];
      
        $target_dir = "images/store/";
        if ($tmpFilePath != ""){
            $newFilePath = $target_dir . basename($_FILES['images']['name'][$i]);
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            } else {
                echo "Multiple file upload attack!\n";
            }
        }
    }
} else {
    $image = $_POST['hiddenimages'];
}

    $sql = "UPDATE products 
                SET
                  date_modify = '$date_modify', 
                  item = '$item', 
                  description = '$description', 
                  quantity = '$quantity',
                  price = '$price',
                  category = '$category',
                  main_image = '$mainImage',
                  images = '$image'              
                WHERE 
                  id = $itemId";
                
       if (mysqli_query($link, $sql)) {
          echo "Record updated successfully";
       } else {
          echo "Error updating record: " . mysqli_error($link);
       }
       mysqli_close($link);
                

    include('index.php');	

?>