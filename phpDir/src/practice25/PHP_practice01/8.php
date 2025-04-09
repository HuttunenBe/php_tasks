<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  
$text = 'Hello World!';
$salt = '$6$hellohellohello$'; 

$encryptedPassword = crypt($text, $salt);  
echo $encryptedPassword;  
?>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>