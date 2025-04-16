<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Calculator</h1>
    <form method="POST" action="">
        <input type="number" name="number1" required placeholder="Enter a number">
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="number2" required placeholder="Enter a number">
        <input type="submit" value="Calculate">
    </form>


</body>

</html>
<div class="result">

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operator = $_POST['operator'];

        if ($operator == "*") {
            $result = $number1 * $number2;
            echo "The result is $number1 * $number2 = $result";
        } elseif ($operator == "+") {
            $result = $number1 + $number2;
            echo "The result is $number1 + $number2 = $result";
        } elseif ($operator == "-") {
            $result = $number1 - $number2;
            echo "The result is $number1 - $number2 = $result";
        } elseif ($operator == "/") {
            if ($number2 != 0) {
                $result = $number1 / $number2;
                echo "The result is $number1 / $number2 = $result";
            } else {
                echo "You cannot divide number by zero!";
            }
        }
    }
    ?>
</div>