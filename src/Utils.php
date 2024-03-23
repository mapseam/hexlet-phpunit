<?php

namespace Hexlet\Phpunit\Utils;

// Эта функция переворачивает переданную строку
function reverseString(string $str): string
{
    return implode(array_reverse(str_split($str)));
}
