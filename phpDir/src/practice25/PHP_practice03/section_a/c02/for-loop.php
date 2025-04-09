<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php

$price = 1.99;
$quantity = 3; 

for ($x = 1; $x <= 5; $x++) {
  $totalPrice = $price * $x; 
  echo "Price is $totalPrice";
}

    ?>
  </p>
</body>

</html>