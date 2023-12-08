<?php
error_reporting(-1);

$anonDice1 = mt_rand(1, 6);
$anonDice2 = mt_rand(1, 6);
$computerDice1 = mt_rand(1, 6);
$computerDice2 = mt_rand(1, 6);
echo "anon has $anonDice1 and $anonDice2\n";
echo "computer has $computerDice1 and $computerDice2\n";
$anonSum = $anonDice1 + $anonDice2;
$computerSum = $computerDice1 + $computerDice2;
if ($anonSum > $computerSum) {
    echo "anon won with his sum of the numbers = $anonSum";
} elseif ($computerSum > $anonSum) {
    echo "computer won with his sum of the numbers = $computerSum";
} elseif ($anonSum == $computerSum) {
    echo "The friendship won";
}