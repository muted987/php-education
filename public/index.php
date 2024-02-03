<?php

function isIsogram(string $string): bool
{
    $arrOfString = str_split(strtolower($string));
    $stringsCount = count($arrOfString);
    $arrOfLetters = array_combine($arrOfString, array_fill(0, $stringsCount, 0));
    foreach ($arrOfString as $letter) {
        $arrOfLetters[$letter]++;
    }
    $lettersCount = count($arrOfString);
    return $lettersCount === strlen($string);
}

var_dump(isIsogram('abcde'));
