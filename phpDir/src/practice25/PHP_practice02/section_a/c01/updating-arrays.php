<?php

$nutrition = [
  ['fat' => 10, 'sugar' => 5, 'salt' => 0.1]
];

$nutrition[0]['fat'] = 12;
$nutrition[0]['fiber'] = 4;

echo $nutrition[0]['fat'];
echo $nutrition[0]['sugar'];
echo $nutrition[0]['salt'];
echo $nutrition[0]['fiber'];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>

</body>

</html>