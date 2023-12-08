<?php
error_reporting(-1);

$letters = [
    'ко',
    'и',
    'дзу',
    'ми',
    'са',
    'ку',
    'ра',
    'да',
    'чи',
    'а',
    'ки',
    'ми',
    'на',
    'го',
    'ха',
    'ру',
];
$name = '';
for ($x =1; $x <=4; $x++) {
    $random = array_rand($letters);
    $randomText = $letters[$random];
    echo "number is $random, the syllable is $randomText\n";
    $name.= $letters[$random];
}
echo "__________\n";
echo "I recommend the name of: $name ------ you can't go wrong, fucking asshole";