<?php
require_once('dbConnection.php');

$itemId = $_POST["itemId"];
 
if ($itemId) {
    $sql = "DELETE FROM product
              WHERE id = $itemId";  

if (mysqli_query($link, $sql)) {
	
      echo "Record deleted successfully";
	  
	
   } else {
	
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

   }
   
   mysqli_close($link);
    
}

include('index.php');