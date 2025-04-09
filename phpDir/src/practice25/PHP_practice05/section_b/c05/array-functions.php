<?php
$customers = [
    ["firstname" => "", "lastname" => "Doe", "email" => "john.doe@example.com"],
    ["firstname" => "Jane", "lastname" => "Smith", "email" => "jane.smith@example.com"],
    ["firstname" => "Alice", "lastname" => "Johnson", "email" => "alice.johnson@example.com"]
];

$greetings = array("Hi", "Howdy", "Hello", "Hola", "Cia", "Moi", "Namaste", "Welcome");
$bestSellers = array('notebook' => 10, 'pencil' => 25, 'ink' => 10);
?>

<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>

<?php
$randomGreeting = $greetings[array_rand($greetings)];
echo $randomGreeting . "<br>";

$itemCount = count($bestSellers);
echo $itemCount . "<br>";


foreach ($bestSellers as $item => $quantity) {
    echo $item . ": " . $quantity . "<br>";
}

foreach ($customers as $customer) {
    if ($customer["firstname"] != "") {
        echo $randomGreeting . ", " . $customer["firstname"] . "!<br>";
    } else {
        echo $randomGreeting . "!<br>";
    }
}

?>

<?php include 'includes/footer.php'; ?>
