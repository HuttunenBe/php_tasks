<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Converter</h1>
    <div class="result">
        <?php
            if (isset($_POST['convert_temperature']) && $_POST['temperature'] !== '') {
                $tempCelsius = $_POST['temperature'];
                echo "<p>$tempCelsius °C = " . (($tempCelsius * 9/5) + 32) . " °F</p>";
                echo "<p>$tempCelsius °C = " . ($tempCelsius + 273.15) . " K</p>";
            }

            if (isset($_POST['convert_speed']) && $_POST['speed'] !== '') {
                $speedKmH = $_POST['speed'];
                echo "<p>$speedKmH km/h = " . ($speedKmH / 3.6) . " m/s</p>";
                echo "<p>$speedKmH km/h = " . ($speedKmH / 1.852) . " knots</p>";
            }

            if (isset($_POST['convert_mass']) && $_POST['mass'] !== '') {
                $massKg = $_POST['mass'];
                echo "<p> $massKg kg = " . ($massKg * 1000) . " grams</p>";
            }

            if (isset($_POST['convert_grams']) && $_POST['grams'] !== '') {
                $grams = $_POST['grams'];
                echo "<p>$grams grams = " . ($grams / 1000) . " kg</p>";
            }
        ?>
    </div>

    <div class="container"> 
        <form method="POST">
            <label>Temperature (Celsius):</label>
            <input type="number" name="temperature"><br>
            <input type="submit" name="convert_temperature" value="Convert Temperature">
        </form>

        <form method="POST">
            <label>Speed (km/h):</label>
            <input type="number" name="speed"><br>
            <input type="submit" name="convert_speed" value="Convert Speed">
        </form>

        <form method="POST">
            <label>Mass (kg):</label>
            <input type="number" name="mass"><br>
            <input type="submit" name="convert_mass" value="Convert Mass (kg to grams)">
        </form>

        <form method="POST">
            <label>Mass (grams):</label>
            <input type="number" name="grams"><br>
            <input type="submit" name="convert_grams" value="Convert Grams to Kilograms">
        </form>
    </div>
</body>
</html>
