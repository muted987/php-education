<?php

function getLoan(
    int $creditSum,
    int $payout,
    $bankPercent,
    int $bankComission,
    int $bankAccountCreating = 0
): int|float {
    $creditSum += $bankAccountCreating;
    $tempSum = 0;
    $count = 0;
    while ($creditSum > 0) {
        $creditSum = ($creditSum * $bankPercent) + $bankComission;
        $tempSum = $creditSum;
        $creditSum -= $payout;
        $count++;
    }
    return round($tempSum + $payout * $count, 2);
}

$creditSum = 39_999;
$payout = 5000;
$homoCreditTotal = getLoan($creditSum, $payout, 1.04, 500, 0);
$softBankTotal = getLoan($creditSum, $payout, 1.03, 1000, 0);
$strawberryBankTotal = getLoan($creditSum, $payout, 1.02, 0, 7777);

echo
    'HomoCredit: ' . $homoCreditTotal . PHP_EOL .
    'SoftBank: ' . $softBankTotal . PHP_EOL .
    'StrawBerryBank: ' . $strawberryBankTotal;
