<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Pet Shop</title>
    <style>
    </style>
</head>

<body>
    <h1>Pet Shop</h1>

    <form method="POST" action="">
        <div id='inputFields'>
            <input type="text" name="petName" required placeholder="Enter pet name">
            <input type="number" name="petAge" required placeholder="Enter pet age">
            <select name="petType" required>
                <option value="Cat">Cat</option>
                <option value="Dog">Dog</option>
                <option value="Bird">Bird</option>
                <option value="Snake">Snake</option>
                <option value="Rat">Rat</option>
            </select>
            <input type="submit" value="add Pet" class='button' name='submit'>
        </div>
    </form>

    <div class="greeting">
        <?php
        class Pet
        {
            public $petName;
            public $petAge;
            public $petType;

            public function __construct($name, $age, $type)
            {
                $this->petName = $name;
                $this->petAge = $age;
                $this->petType = $type;
            }
        }

        function greet($petName, $petAge, $petType)
        {
            echo "Hi! My name is $petName. I'm $petAge years old $petType.";
        }

        function petAction($petType)
        {
            if ($petType === 'Dog') {
                echo ' Bark! 🐶';
            } elseif ($petType === 'Cat') {
                echo ' Meow! 🐱';
            } elseif ($petType === 'Bird') {
                echo ' Chirp! 🐦';
            } elseif ($petType === 'Snake') {
                echo ' ... 🐍';
            } elseif ($petType === 'Rat') {
                echo 'Hiss! 🐀';
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            $petName = $_POST['petName']; 
            $petAge = $_POST['petAge'];
            $petType = $_POST['petType'];

            $pet = new Pet($petName, $petAge, $petType); 
            $_SESSION['pet'][] = $pet; 

            greet($petName, $petAge, $petType); 
            petAction($petType); 
        }

        if (isset($_SESSION['pet'])) { 
            echo "<div id='container'>";
            foreach ($_SESSION['pet'] as $pet) { 
                echo "<p>Pet </br> Name: {$pet->petName} </br> Age: {$pet->petAge} </br> Type: {$pet->petType}</p>";
                echo petAction($pet->petType);
            }
            echo "</div>";
        }
        ?>
    </div>

</body>

</html>



if ($_SERVER['REQUEST_METHOD'] == 'POST') { <!-- checks if form was submitted using POST -->
            $petName = $_POST['petName']; <!--gets submitted values -->

            $pet = new Pet($petName, $petAge, $petType); <!-- make new pet object -->
            $_SESSION['pet'][] = $pet; <!--- adds new pet to array --->

            greet($petName, $petAge, $petType); 
            petAction($petType); <!--- funcation calls ---->
        }

        if (isset($_SESSION['pet'])) { <!--- checks for pets, if pets -> --->
            echo "<div id='container'>";
            foreach ($_SESSION['pet'] as $pet) { <!--- run trough the array and echo stored pets -->