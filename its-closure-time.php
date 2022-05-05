<?php
    function f() {return array(
        "+"=>$addition = function ($a,$b) {
            return $a+$b;} ,
        "-"=>$soustraction = function ($a,$b) {
            return $a-$b;} ,
        "*"=>$multiplication = function ($a,$b) {
            return $a*$b;} ,
    );};
?>
