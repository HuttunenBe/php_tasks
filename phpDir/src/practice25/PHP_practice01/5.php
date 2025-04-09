<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation(); ?>
  </aside>

  <article class="main-content col-xs-8">
    <?php 
      $number = 10; 
      $results = sqrt($number);
      echo $results;

      $string = 'Hello World';
      $result2 = strtoupper($string);
      echo $result2;

      $array = array('apple', 'pear', 'banana');
      $result3 = count($array);
      echo $result3;
    ?>
  </article>

  <?php include "includes/footer.php"; ?>
</section>
