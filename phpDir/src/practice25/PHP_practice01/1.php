<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">
    <!-- Echo function outputs 'Hello' -->
    <h1>
    <?php echo "Hello"; ?>
    </h1>

  </article>
  <?php


$servername = "mylist";
$username = "root";
$password = "lionPass";

$connection = mysqli_connect('dp', 'root', 'lionPass', 'mylist');
if(!$connection) {
 die('Database connection failed') . mysqli_error($connection);
} 


?>



  <?php include "includes/footer.php"; ?>