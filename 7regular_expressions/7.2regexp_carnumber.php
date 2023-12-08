<?php
error_reporting(-1);
$regexp = "/[а-яёА-ЯЁ][0-9]{3}[а-яёА-ЯЁ][а-яёА-ЯЁ]/ui";
$carnumbers = [
    'а286ыо',
    'б568лв',
    'дло78о',
    'Д870Ом',
    'ДР096д',
    'кл098к',
    'пк356о',
    'фл567л'
];
$array = [];
if (preg_match($regexp, $carnumbers, $array)) {
    echo "{$array[1]}";
    var_dump($array);
} else {
    echo "Пожалуйста, укажите номер в формате ******\n";
}