<?php

$creditSum = 39999;
$monthPayment = 5000;
$bankPercent = 1.03;
$bankComission = 1000;
$count = 0;
while ($creditSum > 0) {
    $creditSum = $creditSum * $bankPercent + $bankComission;
    $tempSum = $creditSum;
    $creditSum -= $monthPayment;
    echo $creditSum;
}
