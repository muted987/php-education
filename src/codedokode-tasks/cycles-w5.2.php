<?php

$deposite = 10_000;
$age = 16;
$count = 0;
$percent = 1.1;
$requiredAmount = 1_000_000;

while ($deposite <= $requiredAmount) {
    $deposite *= $percent;
    $count++;
}
$age += $count;
$deposite = number_format($deposite, 0, '');
echo "За $count лет накопится $deposite рублей и анону будет $age";
