<?php

function IsPangram($str): bool {
    $sentences = strtolower(trim($str));
    $letters = str_split("thequickbrownfoxjumpsoverthelazydog");
    foreach ($letters as $letter) {
        if (!strstr($sentences, $letter))
            return false;
    }
    return true;
}

