<?php

use Random\RandomException;

error_reporting(-1);

try {
    $anonDice1 = random_int(1, 6);
    $anonDice2 = random_int(1, 6);
    $compDice1 = random_int(1, 6);
    $compDice2 = random_int(1, 6);
} catch (RandomException $e) {
}

echo
    'У анона выпало ' . $anonDice1 . ' и ' . $anonDice2 . PHP_EOL .
    'У компьютера ' . $compDice1 .  ' и ' .  $compDice2 . PHP_EOL;

$anonSum = $anonDice1 + $anonDice2;
$compSum = $compDice1 + $compDice2;

echo
    'Сумма анона - ' . $anonSum . PHP_EOL .
    'Сумма компьютера - ' . $compSum . PHP_EOL;

if (($compDice1 === $compDice2) && ($anonDice1 === $anonDice2)) {
    echo "2 дабла - тебя ждет большая удача. Запости скриншот!!!\n";
} elseif ($anonSum > $compSum) {
    echo "Анон победил!!!";
} elseif ($anonSum < $compSum) {
    echo "Компьютер победил >:(";
}
