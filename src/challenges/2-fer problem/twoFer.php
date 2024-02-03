<?php

declare(strict_types=1);

function twoFer(string $name): string
{
    $phrase = 'One for ' . $name . ', one for me';
    return $name === '' ? 'One for you, one for me' : $phrase;
}

echo twoFer('');
