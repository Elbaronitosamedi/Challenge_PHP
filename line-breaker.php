<?php

function breakLines($string , int $limit): string {
    return wordwrap($string, $limit,"\n", false);
}