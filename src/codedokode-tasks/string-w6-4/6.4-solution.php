<?php

$text = 'А роза упала на лапу Азора';
$result = 'палиндром';

$text = preg_replace('/\s+/', '', mb_strtolower($text));

$textForTest = implode('', array_reverse(mb_str_split($text, 1)));

if ($text === $textForTest) {
    echo $result . ' ' . $textForTest . ' - ' . $text;
} else {
    echo 'Пошел нахуй';
}
