<?php

function capsMe($string) {
    return strtoupper($string);
}

function lowerMe($string) {
    return strtolower($string);
}

function upperCaseFirst($string) {
    return ucwords($string);
}

function lowerCaseFirst($string) {
    return \implode(' ', \array_map('lcfirst', \explode(' ', $string)));
}

function removeBlankSpace($string) {
    return trim($string);
}
