<!DOCTYPE html>
<html>
<?
include('dbConnection.php');  
?>
<head>
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  
  <header>
  <h1>Product List</h1>
  
  </header>
  <main>

    <section>
      <table>
        <tr>
          <th class='t1'>Item</th>
          <th class='t2'>Description</th>
          <th class='t3'>Category</th>
          <th class='t4'>Price</th>
          <th class='t5'>Quantity</th>
          <th class='t6'>Main Image</th>
          <th class='t9'>Other Image</th>
          <th class='t7'>&nbsp;</th>
          <th class='t8'>&nbsp;</th>
        </tr>
        
    <?php $queryItem = 'SELECT * FROM product
                  ORDER BY id';
        $result = $link->query($queryItem);
        

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) { ?> 
      
        <tr>
          <td class='t1'><?php echo $row['item']; ?></td>
          <td class='t2'><?php echo $row['description']; ?></td>
          <td class='t3'><?php echo $row['category']; ?></td>
          <td class='t4'><?php echo $row['price']; ?></td>
          <td class='t5'><?php echo $row['quantity']; ?></td>
          <td class='t6'><img src="images/<?= $row['main_image']; ?>" alt="product image"></td>
          <td class='t9'>
            <ul>
                <? if($row['images']) {
                    $images = explode(",", $row['images']);
                    foreach($images as $image) {
                       echo "<li>$image</li>";
                    } 
                  }   
                ?>
            </ul>
          </td>
          <td class='t7'>
          <form action="update_item_form.php" method="post">
              <input type="hidden" name="itemId" value="<?= $row['id']; ?>">
              <input type="submit" value="Update">
            </form>
      </td>
      <td class='t8'>
          <form action="delete_item.php" method="post">
              <input type="hidden" name="itemId" value="<?= $row['id']; ?>">
              <input type="submit" value="Delete">
            </form>
      </td>
        </tr>
        <?php }
        } else {
            echo "0 results";
        }
    
    ?>
      </table>
      <a href="add_item_form.php"><h2>add item</h2></a>
        
    </section>
  </main>
  
</body>
</html>