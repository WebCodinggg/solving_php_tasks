<?php
error_reporting(-1);

$rates = [3, 5, 3, 2, 1, 8, 4, 3, 4, 3, 2, 3];
$ratesSum = array_sum($rates);
$ratesCount = count($rates);
$averageRate = $ratesSum / $ratesCount;
 echo "anon got $ratesCount marks, and their sum is 
$ratesSum, but the average mark is $averageRate";