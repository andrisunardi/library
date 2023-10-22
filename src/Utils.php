<?php

namespace Andrisunardi\Library;

class Utils
{
    public static function oddEven(string $value): string
    {
        return $value % 2 == 0 ? 'Even' : 'Odd';
    }
}