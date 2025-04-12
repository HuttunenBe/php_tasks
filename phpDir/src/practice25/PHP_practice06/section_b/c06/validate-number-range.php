
<?php

function is_number($number, int $min= 0, int $max = 100): bool {
  return ($number >= $min and $number <= $max);
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $input = $_POST['input'];
  if ($input >= 15 && $input <= 65) {
      echo 'Age is valid!';
  } else {
      echo 'You must be 16-65 years old!';
  }
}

?>

<form method="POST" action="">
        <input type="number" name="input" required placeholder="Enter a number">
        <input type="submit" value="submit">
    </form>



<?php include 'includes/header.php'; ?>

