<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header><h1>Add Item</h1></header>

    <main>
        <form action="add_item.php" method="post" id="item_form_add" enctype="multipart/form-data">

            <label>Item:</label>
            <input type="text" name="item"><br>

            <label>Description:</label>
            <input type="text" name="description"><br>

            <label>Category:</label>
            <input type="text" name="category"><br>

            <label>Price</label>
            <input type="text" name="price"><br>
			
			<label>Quantity:</label>
            <input type="text" name="quantity"><br>

            <label>Product Image:</label>
            <input type="file" name="mainImage" ><br>

            <label>Other Images</label>
            <input type="file" name="images[]" multiple><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Item" name="submit" ><br>
        </form>
		<p><a href="index.php">Back to Main</a></p>
    </main>

</body>
</html>