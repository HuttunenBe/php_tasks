<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	<?php  
	function calculator($number1, $number2){
		return $number1 * $number2;
	}

	$number1 = 10;
	$number2 = 20;

	$result = calculator($number1, $number2);
	echo $result;
	?>
	


	<?php  
	function calculator2($number1, $number2){
		return $number1 + $number2;
	}

	$number1 = 10;
	$number2 = 20;

	$result = calculator($number1, $number2);
	echo $result;
	?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>