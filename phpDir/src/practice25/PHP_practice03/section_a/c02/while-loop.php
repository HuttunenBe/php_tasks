<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php

$amount = 4;
$price = 5;

while ($amount > 0) {
    echo $amount * $price;
    break; 
}


    ?>
  </p>
</body>

</html>