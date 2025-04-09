<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>


  <article class="main-content col-xs-8">

  <?php
class Dog {
    public $eyeColor;
    public $noseColor;
    public $furColor;

    function ShowAll() {
        echo $this->eyeColor , " ";
        echo $this->noseColor , " ";
        echo $this->furColor , " ";
    }
}

$pitbull = new Dog();
$pitbull->eyeColor = "Brown";
$pitbull->noseColor = "Black";
$pitbull->furColor = "Gray";


$pitbull->ShowAll();
?>

	



  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>
		?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>