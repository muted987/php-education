<?php

$text = 'А роза упала на лапу Азора';
$result = 'палиндром';

$text = str_replace(' ', '', mb_strtolower($text));

$reversedText = implode('', array_reverse(mb_str_split($text)));
if ($text === $reversedText) {
    echo $result . ' ' . $reversedText . ' - ' . $text;
} else {
    echo 'Пошел нахуй';
}
