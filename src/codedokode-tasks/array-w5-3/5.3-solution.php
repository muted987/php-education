<?php

$rates = [3, 5, 2, 3, 4, 5, 2, 3, 5, 5, 5, 5];
$ratesSum = array_sum($rates);
$ratesAmount = count($rates);
$averageRate = $ratesSum / $ratesAmount;
echo
    'Анону поставили ' . $ratesAmount . ' оценок, их сумма - ' . $ratesSum . PHP_EOL .
    'Средний балл - ' . round($averageRate, 2);
