<?php

error_reporting(-1);

$percent = 1.03;
$creditBalance = 40000 * $percent;
$servicePayment = 1000;
$monthlyPayment = 5000;
$paymentTotal = 0;

/* Посчитаем расходы 20 раз на 20 месяцев вперед */
for ($month = 1; $month <= 20; $month++) {

    $creditBalance = ( $creditBalance * $percent ) + $servicePayment - $monthlyPayment;
    $paymentTotal += $monthlyPayment;
    echo "$month месяц спустя: долг = $creditBalance руб, выплачено всего $paymentTotal руб. \n";

    if ($creditBalance < 0) {
        echo "С меня хватит!\n";
        break;
    }
}