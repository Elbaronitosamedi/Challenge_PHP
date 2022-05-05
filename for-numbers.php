<?php
echo(2);
function isprime($number){
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
            return false;
    }return true;
}for($i=3; $i < 101; $i++){
    if (isprime($i) == true) {
        echo", $i";
    }
}