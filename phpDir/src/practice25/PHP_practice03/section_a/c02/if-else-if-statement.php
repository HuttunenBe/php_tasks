<?php

$candyStock = 100;
$orderAmount = 25;

if ($candyStock >= $orderAmount) {
    echo 'In stock';
} elseif ($candyStock < $orderAmount) {
    echo 'Out of stock';
} else {
    echo 'Coming soon';
}


?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */
  ?>
</body>

</html>