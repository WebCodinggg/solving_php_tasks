<?php
error_reporting(-1);

$code = array(
    'а'	=>	'1',
    'б'	=>	'2',
    'в'	=>	'3',
    'г'	=>	'4',
    'д'	=>	'5',
    'е'	=>	'6',
    'ё'	=>	'7',
    'ж'	=>	'8',
    'з'	=>	'9',
    'и'	=>	'0',
    'й'	=>	'#',
    'к' => '*',
    'л' => '@',
    'м' => '-',
    'н' => '=',
    'о' => ']',
);
$text = "Нас предали. Явка провалена.";
$cipher = strtr($text, $code);

echo "Original text is: {$text}, but the cipher is {$cipher}\n";
$x = array_flip ($code);
$cipher1 = strtr($text, $x);
echo "Decoding is {$cipher1}";