<?php

error_reporting(-1);

$dollars = 200;
$exchange_rate = 32.24;
$roubles = $dollars * $exchange_rate;

echo "$dollars долларов можно обменять на $roubles рублей";