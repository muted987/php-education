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

for ($i = 1; $i <= 4; $i++) {
    try {
        $random = random_int(0, count($letters) - 1);
    } catch (RandomException $e) {
    }
    $randomText = $letters[$random];
    $name .= $randomText;
    echo 'Выпало число ' . $random . ', слог ' . $randomText . PHP_EOL;
}

echo "------\n";
echo 'Советую имя: ' . $name . ' - не прогадаешь!' . PHP_EOL;
