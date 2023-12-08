<?php
error_reporting(-1);

$anonHeight = 169;
$classmates = [
    'anton' => 172,
    'semen' => 165,
    'lena' => 189,
    'ivan' => 171,
    'petr' => 182,
    'sidor' => 176,
    'anja' => 180,
    'tanja' => 179,
    'manja' => 171
];
$number = 0;
foreach ($classmates as $name => $height) {
    echo "name: $name, height: $height\n";
    if ($anonHeight < $height) {
        $number++;
    }
}
echo "in class $number people are higher than anon";