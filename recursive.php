<?php

function factorial($nbr): int | float {
    if($nbr === 0)
        return 1;  
    else {
        return $nbr*factorial($nbr-1);
    }
}