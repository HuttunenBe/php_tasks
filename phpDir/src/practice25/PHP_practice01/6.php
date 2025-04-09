<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->





  <article class="main-content col-xs-8">


    <?php

    $number1 = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $number1 = $_POST['number1'];}
  echo "You said $number1"


		?>

<form method="POST" action="">
        <input type="number" name="number1" required placeholder="Enter a number">
    </form>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>