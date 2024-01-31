<?php

$code = [
    'а' => '1',
    'б' => '2',
    'в' => '3',
    'г' => '4',
    'д' => '5',
    'е' => '6',
    'ё' => '7',
    'ж' => '8',
    'з' => '9',
    'и' => '0',
    'й' => '#'
];

$text = 'нас предали. явка провалена.';
$cipher = strtr($text, $code);
echo
    'Оригинал: ' . $text . PHP_EOL .
    'Шифровка: ' . $cipher . PHP_EOL .
    '---------' . PHP_EOL;

$decipher = strtr($cipher, array_flip($code));
echo
    'Шифровка: ' . $cipher . PHP_EOL .
    'Расшифровка: ' . $decipher . PHP_EOL;
