<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<?php
$string = 'This is a string';

$lowercasedString = strtolower($string); 
$uppercasedString = strtoupper($string); 

$characterAmount = strlen($string); 
$wordAmount = str_word_count($string); 

echo $string , "<br>";
echo $lowercasedString . "<br>";;
echo $characterAmount . "<br>";;
echo $wordAmount;
?>

<?php include 'includes/footer.php'; ?>
