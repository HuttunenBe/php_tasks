<?php

$priceToffee = 3;
$priceMints = 2;
$priceFudge = 8;

$stockToffee = 5;
$stockMints = 12;
$stockFudge = 8;

function stockCheck($stock) {
  if ($stock < 10) {
      return "Yes";
  } else {
      return "No re-order necessary.";
  }
}

function totalValue($amount, $price) {
  return $amount * $price;
}

function taxValue($totalValue) {
  $tax = $totalValue * 0.14;
  return number_format($tax) . '€';
}

$totalToffee = totalValue($stockToffee, $priceToffee);
$totalMints = totalValue($stockMints, $priceMints);
$totalFudge = totalValue($stockFudge, $priceFudge);

$taxToffee = taxValue($totalToffee);
$taxMints = taxValue($totalMints);
$taxFudge = taxValue($totalFudge);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Basic Functions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Stock Control</h2>
  <table border="1">
    <tr>
      <th>Product</th>
      <th>Stock</th>
      <th>Re-order</th>
      <th>Total value</th>
      <th>Tax due</th>
    </tr>
    <tr>
      <td>Toffee</td>
      <td><?php echo $stockToffee; ?></td>
      <td><?php echo stockCheck($stockToffee); ?></td>
      <td><?php echo number_format($totalToffee, 2)  . '€'; ?></td>
      <td><?php echo $taxToffee; ?></td>
    </tr>
    <tr>
      <td>Mints</td>
      <td><?php echo $stockMints; ?></td>
      <td><?php echo stockCheck($stockMints); ?></td>
      <td><?php echo number_format($totalMints, 2)  . '€';?></td>
      <td><?php echo $taxMints; ?></td>
    </tr>
    <tr>
      <td>Fudge</td>
      <td><?php echo $stockFudge; ?></td>
      <td><?php echo stockCheck($stockFudge); ?></td>
      <td><?php echo number_format($totalFudge, 2)  . '€'; ?></td>
      <td><?php echo $taxFudge; ?></td>
    </tr>
  </table>
</body>

</html>
