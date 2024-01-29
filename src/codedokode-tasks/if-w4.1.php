<?php

error_reporting(-1);

$anonDice1 = random_int(1, 6);
$anonDice2 = random_int(1, 6);

$compDice1 = random_int(1, 6);
$compDice2 = random_int(1, 6);

echo "У анона выпало $anonDice1 и $anonDice2.\nУ компьютера $compDice1 и $compDice2\n";

$anonSum = $anonDice1 + $anonDice2;
$compSum = $compDice1 + $compDice2;

echo ("Сумма анона - $anonSum.\nСумма компьютера - $compSum\n");

if (($compDice1 === $compDice2) && ($anonDice1 === $anonDice2)) {
    echo "2 дабла - тебя ждет большая удача. Запости скриншот!!!\n";
} elseif ($anonSum > $compSum) {
    echo "Анон победил!!!";
} elseif ($anonSum < $compSum) {
    echo "Компьютер победил >:(";
}

