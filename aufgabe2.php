<?php
$liter1 = 40.5;
$liter2 = 35.7;
$price = 1.499;

$cost = ($liter1 + $liter2) * $price;
$result = "Die Benizinkosten betragen für ". ($liter1 + $liter2) . " Liter " . $cost . "€";
echo $result;
?>