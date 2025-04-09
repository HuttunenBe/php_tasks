<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?php
   $price = 1.99;
   $quantity = 3; 
   
   for ($x = 10; $x <= 100; $x++) {
     $totalPrice = $price * $x; 
     echo "Price is $totalPrice<br>";
   }
   
    ?>
  </p>
</body>

</html>