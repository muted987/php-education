<?php

declare(strict_types=1);

function colorCode(string $resistorColor): int
{
    $resistorColors = array_combine([
        'black',
        'brown',
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'violet',
        'grey',
        'white'
    ], range(0, 9));
    return $resistorColors[$resistorColor];
}

echo colorCode('red');
