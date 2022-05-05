<?php

function findIn(string $key, array $arr): string|bool {
    foreach ($arr as $keyArr => $valueArr){
       if($keyArr == $key){
           return $valueArr;
       }
       if(is_array($valueArr)){
               if (findIn($key, $valueArr)){
                   return findIn($key, $valueArr);
               }else {
                   continue;
               }
       }
   }
   return False;
}
