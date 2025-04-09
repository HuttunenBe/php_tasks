<?php

$candyPrice = 5;
$amount = 3;

$subtotal = $candyPrice * $amount; 

$tax = 0.2;

$taxAmount= $subtotal * $tax;

$totalAmount = $subtotal + $taxAmount;

echo $tax;
echo $totalAmount;

?>





<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>

</body>

</html>