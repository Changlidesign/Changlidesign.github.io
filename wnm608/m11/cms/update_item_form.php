<?php

require_once('dbConnection.php');

$itemId = $_POST["itemId"];


$sql = "SELECT * FROM products WHERE id = $itemId";

$row = mysqli_query($link, $sql);

$result = mysqli_fetch_array($row);

$item = $result['item'];
$description = $result['description'];
$quantity = $result['quantity'];
$price = $result['price'];
$category = $result['category'];
$mainImage = $result['main_image'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header><h1>Update Item</h1></header>


    <main>
     
        <form action="update_item.php" method="post" id="item_form_update" enctype="multipart/form-data">

            <label>Item:</label>
            <input type="text" name="item" value="<?= $item; ?>"><br>

            <label>Description:</label>
            <input type="text" name="description" value="<?= $description; ?>"><br>

            <label>Quantity:</label>
            <input type="text" name="quantity" value="<?= $quantity; ?>"><br>
			
			<label>Price:</label>
            <input type="text" name="price" value="<?= $price; ?>"><br>

            <label>category:</label>
            <input type="text" name="category" value="<?= $category; ?>"><br>

            <label>Product Image:&nbsp;<img class="mainImage" src="images/store/<?= $mainImage; ?>"></label>
            <input type="file" name="mainImage" ><br> 
            <input type="hidden" name="hiddenmainimage" value="<?= $mainImage; ?>">

            <label>Other Images:
                <ul>
                    <? if($result['images']) {
                        $images = explode(",", $result['images']);
                        foreach($images as $img) {
                           echo "<li>$img</li>";
                        } 
                      }   
                    ?>
                </ul>
            </label>
            <input type="file" name="images[]" multiple><br>
            <input type="hidden" name="hiddenimages" value="<?= $result['images']; ?>">


            <label>&nbsp;</label>
			<input type="hidden" name="itemId" value="<?= $itemId; ?>">
			
            <input type="submit" value="update"><br>
        </form>
        
		<p><a href="index.php">Back to Admin</a></p>
    </main>

    
</body>
</html>