<?php

$offers = [
['name' => 'chocolate',
'price' => 2.5,
'stock' => 50
],
['name' => 'mints',
'price' => 0.5,
'stock' => 60
],
['name' => 'fudge',
'price' => 3.5,
'stock' => 40
],
['name' => 'bubblegum',
'price' => 1.5,
'stock' => 50
]

];


echo $offers[0]['name'] . $offers[0]['price']; 
echo $offers[1]['name'] . $offers[1]['price']; 

echo $offers[2]['name'] . $offers[2]['price']; 
echo $offers[3]['name'] .  $offers[3]['price'];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>

</body>

</html>