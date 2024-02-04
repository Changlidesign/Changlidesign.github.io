<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
          <form action="add_product.php" method="post"
              id="product_form">

            <label>Product Name:</label><br>
            <input type="text" name="prodname"><br>

            <label>Price:</label><br>
            <input type="text" name="price"><br>

            <label>Quantity:</label><br>
            <select name="qty">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <label>Product Description:</label><br>
            <textarea rows="5" cols="50" type="text" name="description"></textarea><br>
			
			<label>Size:</label><br>
            <input type="text" name="size[]"><br>
            <input type="text" name="size[]"><br>
            <input type="text" name="size[]"><br>
            <input type="text" name="size[]"><br>
            <input type="text" name="size[]"><br>
            <input type="text" name="size[]"><br>
            <input type="text" name="size[]"><br><br>

            <label>&nbsp;</label>
            <input type="submit" value="submit"><br>
        </form>
        

</body>
</html>