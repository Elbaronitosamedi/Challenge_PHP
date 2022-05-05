<?php

function calc($str): int {
    $result = eval("return $str;");
    $result = (int)$result; 
    return $result;
}