<?php


function joinWords($arr, $sep=" "): string{
    $result = "";
    for($i=0; $i< sizeof($arr); $i++){
            $result .= $arr[$i];
            if($i!=sizeof($arr)-1){
                $result .= $sep;
            }
    }
    return $result;
}
