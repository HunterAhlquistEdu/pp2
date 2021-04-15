<?php
function printArr($array) {
    for ($i = 0; $i < count($array); $i++){
        echo $array[$i] . "<br>";
    }
}

function largest($array) {
    $largest = -INF;
    foreach ($array as $n){
        if ($n > $largest) {
            $largest = $n;
        }
    }
    return $largest;
}