<?php

function reverse($arr): array {

    return array_reverse($arr);
}

function push($arr, ...$str): array
{
    $result = array_push($arr, ...$str);
    return $arr;
}

function sum($arr): int {
    return array_sum($arr);
}

function arrayContains($arr, $value) {
    if (in_array($value, $arr) == true) {
        return $value;
    } else {
        return false;
    }
}

function merge($firstTab, $secondTab, $thirdTab) {
    return array_merge($firstTab, $secondTab, $thirdTab);
}
