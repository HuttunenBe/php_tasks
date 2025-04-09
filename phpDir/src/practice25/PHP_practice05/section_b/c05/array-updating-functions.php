<?php
$items = array("notebook", "pencil", "eraser");
array_unshift($items, "scissors");
$pop = array_pop($items);
?>

<?php include 'includes/header.php'; ?>

<h1>Order</h1>

<p>Items: <?php print_r($items); ?></p>
<p>Item popped: <?php echo $pop; ?></p>

<?php include 'includes/footer.php'; ?>
