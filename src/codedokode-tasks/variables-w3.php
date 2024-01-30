<?php

use Random\RandomException;

echo 'Бросаем кубик...' . PHP_EOL;
try {
    $random = random_int(1, 6);
} catch (RandomException $e) {
}
echo 'Выпало ' . $random . "\n";
