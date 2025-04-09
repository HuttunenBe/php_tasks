<?php
$day = 'monday';
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php
  switch ($day) {
    case 'monday':
      echo '20% off chocolate';
      break;
    case 'tuesday':
      echo '20% off mints';
      break;
    default:
      echo 'Buy three packs, get one free.';
  }
  ?>

</body>

</html>
