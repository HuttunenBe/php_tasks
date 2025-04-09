<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


	<?php
$number1 = 10;
$number2 = 20;

echo $number1 + $number2;

$array1 = ['apple', 'banana', 'pear'];
$array2 = [
	'fruit' => 'apple',
	'fruit' => 'banana',
	'fruit' => 'cherry'
];

		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>