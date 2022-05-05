<?php
function explodeWords(string $str, string $sep="\s", int $limit = PHP_INT_MAX): array {
    if($sep=="/"){
        $sep = "/\//";
    }else{
        $sep = "/".$sep."/";
    }
    if($limit>0){    
        $split = preg_split($sep, $str, $limit);
    }
    if ($limit<0){
        $split = preg_split($sep, $str);
        return array_slice($split,0, $limit);
    }
    return $split;
}
