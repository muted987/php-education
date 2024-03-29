<?php

declare(strict_types=1);

$creditSum = 39_999;
$payout = 5000;
$homoCreditTotal = getLoan($creditSum, $payout, 1.04, 500);
$softBankTotal = getLoan($creditSum, $payout, 1.03, 1000);
$strawberryBankTotal = getLoan($creditSum, $payout, 1.02, 0, 7777);

echo
    'HomoCredit: ' . $homoCreditTotal . PHP_EOL .
    'SoftBank: ' . $softBankTotal . PHP_EOL .
    'StrawBerryBank: ' . $strawberryBankTotal;

function getLoan(
    int $creditSum,
    int $payout,
    float $bankPercent,
    int $bankCommission,
    int $bankAccountCreating = 0
): int|float {
    $creditSum += $bankAccountCreating;
    $tempSum = 0;
    $count = 0;
    while ($creditSum > 0) {
        $creditSum = ($creditSum * $bankPercent) + $bankCommission;
        $tempSum = $creditSum;
        $creditSum -= $payout;
        $count++;
        echo $tempSum . PHP_EOL;
    }
    echo $count . PHP_EOL;
    return round($payout * $count - $tempSum, 2);
}
