<?php

$nbrRicard = 1 ;
do {
    echo"Come on ricard number $nbrRicard";
    echo"\n";
    if($nbrRicard == 3 ) {
        echo "I'll have to stop soon!";
        echo"\n";
        $nbrRicard++;
        continue;
    } elseif($nbrRicard == 5 ) {
        echo "I am no longer very fresh ...";
        echo"\n";
        $nbrRicard++;
        continue;
    }
    $nbrRicard++;
} while($nbrRicard <8);