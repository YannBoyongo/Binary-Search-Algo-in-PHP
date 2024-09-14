<?php

function searchKey($arr, $key){  
    $left = 0;
    $right = count($arr) - 1;

    while($left <= $right){
        $middle = floor(($left + $right) / 2);

        if($arr[$middle] == $key){
            return $middle;
        }

        if($key < $arr[$middle]){
            $right = $middle - 1;
        }else{
            $left = $middle + 1;
        }
    }
    
    return false;
}


$arr = [-5, -1, 2, 6, 9, 11, 15, 22, 27, 34];
$key = 9;

echo searchKey($arr, $key);