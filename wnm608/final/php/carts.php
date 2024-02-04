<?php

include_once "db_connect.php";

?>
   <?php include "headcarts.php"; ?>
</head>
<?php include "header.php"; ?>


  
<?php 


if(isset($_POST['delId'])) {
  $delete = $_POST['delId'];
  $query_string = "UPDATE `products` SET cart = 0 WHERE `id` = $delete";
  $result = $conn->query($query_string);
  if($conn->errno) die($conn->error);
  header("Refresh:0");
}


$query_string = "SELECT * FROM `products` WHERE `cart` > 0";
$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

  $total = 0;

while($row = $result->fetch_object()){
?>
<div class="shopping-cart">
    

      <!-- Product #1 -->
      <div class="item">
        <div class="buttons">
          
            <form method="post">
              
      <input type="submit" value="X" class="delete-btn">
      <input type="hidden" name="delId" value="<?= $row->id ?>">
      </form>
          </span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="<?= $row->image ?>" alt=""/>
        </div>

        <div class="description">
          <span><?= $row->productName ?></span>
          <span>$<?= $row->price ?></span>
        </div>

        <div class="quantity">
          
          <input type="text" name="name" value="<?= $row->cart ?>">
          
         
        </div>

        
        <div class="total-price">$<?= ($row->price * $row->cart); 
          $total += $row->price * $row->cart; 
            // echo $total;
          ?></div>
      </div>

<?php
}
?>
<div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">$<?= $total ?></div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">$0.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">$<?= $total ?>
        <form method="post">
          <input type="submit" value="Check out" class="cart-btnn">

      </form></div>

      
      </div>
    </div>
  </div>
      
    </div>
  </p>
  </div>

</div>
  <script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 1) {
          value = value - 1;
        } else {
          value = 0;
        }

        $input.val(value);

      });

      $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
          value = value + 1;
        } else {
          value =100;
        }

        $input.val(value);
      });

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });
    </script>
</body>
</html>
