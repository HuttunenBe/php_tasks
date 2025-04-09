<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
if ('language' == 'Python') {
  echo "I love Python";
} elseif ('language' == 'Java') {
  echo "Java is the best";
} else {
  echo "I love PHP";
}
?>


<?php
for ($x = 0; $x <= 10; $x++) {
  echo $x . "<br>";
}
?>

<?php
$day = 3;  

switch ($day) {
  case 1:
    echo 'Monday';
    break;
  case 2:
    echo 'Tuesday';
    break;
  case 3:
    echo 'Wednesday';
    break;
  case 4:
    echo 'Thursday';
    break;
  case 5:
    echo 'Friday';
    break;
  default:
    echo 'Saturday';
}
?>


</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>