
<?php
$target_dir = "images/store/";
$target_file = $target_dir . basename($_FILES["mainImage"]["name"]);

if (move_uploaded_file($_FILES['mainImage']['tmp_name'], $target_file)) {
  
} else {
    echo "Possible file upload attack!\n";
}

foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $target_dir.basename($_FILES["images"]["name"][$key]);
        move_uploaded_file($_FILES["images"]["tmp_name"][$key], $name);
    }
}


?>
