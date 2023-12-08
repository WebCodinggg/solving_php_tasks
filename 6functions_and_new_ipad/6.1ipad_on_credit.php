<?php
error_reporting(-1);

function iPadOnCredit ($creditSum, $percent, $commission, $one_timePayment, $payment, $sum) {
    for ($a = 0; $a < 100; $a++) {
        $creditSum = ($creditSum * $percent) + $creditSum + $commission + $one_timePayment - $payment;
        $sum =  $sum + $payment;
        echo "$creditSum --- paid $sum\n";
        if ($creditSum < 0) {
            break;
        }
    }

}

$a = iPadOnCredit(39999, 0.04, 500, 0, 5000, 0);
echo "$a\n";
$b = iPadOnCredit(39999, 0.03, 1000, 0, 5000, 0);
echo "$b\n";
$c = iPadOnCredit(47776, 0.02, 0, 0, 5000, 0);
echo "$c\n";