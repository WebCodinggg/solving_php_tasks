<?php
error_reporting(-1);

$sum = 10000;
$percent = 10;
$age = 16;

for ($year = 1; $year < 100; $year++) {
    $sum = ($sum / 100 * $percent) + $sum;
    $howOld = $age + $year;
    if ($sum > 1000000) {
        break;
    }
    echo "After $year year = $sum and the boy is $howOld\n";

}