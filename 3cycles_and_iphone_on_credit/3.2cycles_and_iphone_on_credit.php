<?php
error_reporting(-1);

$creditSum = 40000;
$percent = 3;
$comission = 1000;
$sum = 5000;
$paymentTotal = 0;

for ($x = 1; $x < 20; $x++) {
    $creditSum = ($creditSum / 100 * $percent) + $creditSum + 1000 - 5000;
    $paymentTotal = $paymentTotal + $sum;
    if ($creditSum < 0) {
        break;
    }
    echo "$x month credit is $creditSum, paid $paymentTotal\n";
}