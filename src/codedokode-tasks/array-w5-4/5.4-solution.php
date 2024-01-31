<?php

$anonHeight = 175;

$classmatesHeight = [
    'Антон' => 172,
    'Дима' => 165,
    'Коля' => 195,
    'Маша' => 150,
    'Маня' => 228
];

$countHigher = 0;

foreach ($classmatesHeight as $name => $height) {
    echo 'Имя: ' . $name . ', рост: ' . $height . '. ';
    if ($height > $anonHeight) {
        echo $name . ' - выше анона' . PHP_EOL;
        $countHigher++;
    } elseif ($height < $anonHeight) {
        echo $name . ' - ниже анона' . PHP_EOL;
    } else {
        echo $name . ' - одного роста с аноном' . PHP_EOL;
    }
}

echo 'В классе ' . $countHigher . ' людей выше анона.';
