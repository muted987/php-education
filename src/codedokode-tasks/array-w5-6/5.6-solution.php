<?php

use Random\RandomException;

$letters = [
    'ко',
    'и',
    'дзу',
    'ми',
    'са',
    'ку',
    'ра',
    'да',
    'чи',
    'а',
    'ки',
    'ми',
    'на',
    'го',
    'ха',
    'ру'
];
$name = '';
$arrLength = count($letters) - 1;
for ($i = 1; $i <= 4; $i++) {
    try {
        $random = random_int(0, $arrLength);
    } catch (RandomException $e) {
    }
    $randomText = $letters[$random];
    $name .= $randomText;
    echo 'Выпало число ' . $random . ', слог ' . $randomText . PHP_EOL;
}

echo "------\n";
echo 'Советую имя: ' . mb_convert_case($name, 2) . ' - не прогадаешь!' . PHP_EOL;
