<?php
include('includes/header.php');

$candyStock = 60;

if ($candyStock === 0) {
    echo 'Out of stock';
} elseif ($candyStock < 20) {
    echo 'Low stock';
} elseif ($candyStock > 20) {
    echo 'Stock is good';
}

include('includes/footer.php');
?>

