<?php
/**
 * Hunter Ahlquist
 * 4/15/21
 * index.php
 * Pair Program 2
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<h1>Pair Program 2</h1>
<?php
echo "PHP Array Practice <br>";

$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);

function printArr($array) {
    for ($i = 0; $i < count($array); $i++){
        echo $array[$i] . "<br>";
    }
}
?>
</body>
</html>



