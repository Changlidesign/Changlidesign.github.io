<?php 

$query_string = "SELECT * FROM `products` WHERE `cart` > 0";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

$total = 0;

while($row = $result->fetch_object()){
    $total += $row->cart;
}

?>

<nav>
    <ul>
        <a href="index.php">
            <input type="image" src="one.png" class="logo">
        </a>
        <li class="menu1"><a href="index.php">Home</a></li>
        <li class="menu2"><a href="product_list.php">Products</a></li>
        <li class="menu3">
            <a href="carts.php"><span class="cart-title">Cart</span><span class="cart-amount"><?= $total==0 ? "" : $total ?></span></a>
        </li>

    </ul>
</nav>