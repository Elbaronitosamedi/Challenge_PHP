<?php
    $today = function () {
        $var = date("F j, Y");
        return "It is $var"; 
    };
    
    $isLeapYear = function (int $year) {
        if($year%4 == 0){
            return True;
        }
        return False;
    }
?>
