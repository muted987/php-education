<?php

declare(strict_types=1);

function isLeapYear(int $year): bool
{
    return (($year % 100 !== 0 and $year % 4 === 0) or $year % 400 === 0);
}

echo isLeapYear(2004);
