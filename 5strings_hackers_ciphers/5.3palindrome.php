<?php
error_reporting(-1);
mb_internal_encoding('UTF-8');

$text = "А роза упала на лапу Азора";
$result = "Палиндром";
$text = str_replace(" ", "", $text);
$newtext = mb_strtolower($text);
echo "$newtext\n";

$length = mb_strlen($newtext);
$halfLength = floor($length / 2);
$lastLetter = $length - 1;

for ($a = 0; $a <= $halfLength; $a++) {
    if ($newtext[$a] != $newtext[$lastLetter - $a]) {
        echo "This is not a $result\n";
    } else {
        echo "This is a $result\n";
    }
}


