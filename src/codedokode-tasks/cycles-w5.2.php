<?php

$deposite = 10_000;
$age = 16;
$count = 0;
$percent = 1.1;
$required_amount = 1_000_000;

while ($deposite <= $required_amount) {
    $deposite *= $percent;
    $count++;
}
$age += $count;
$deposite = number_format($deposite, 0, '');
echo "За $count лет накопится $deposite рублей и анону будет $age";