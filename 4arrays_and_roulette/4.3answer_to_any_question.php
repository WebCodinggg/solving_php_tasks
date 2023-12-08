<?php
error_reporting(-1);

$answers = [
    1 => 'yes',
    2 => 'no',
    3 => 'I dont know',
    4 => 'never',
    5 => 'it depends on you',
    6 => 'ask anon'
];

$question = 'will I learn php language?';
$change = array_flip($answers);
$answer = array_rand($change);
echo "Question is: $question\n";
echo "Answer is: $answer";