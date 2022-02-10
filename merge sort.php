<?php
$test_array = array(3,1,4,5,1,9,2,6,5,4);

function mergeSort($test_array){
    if(count($test_array)<2){
        return $test_array;
    }
    $mid= (int)count($test_array)/2;

    $left= array_slice($test_array, 0, $mid);
    $right= array_slice($test_array, $mid);

    $left= mergeSort($left);
    $right= mergeSort($right);
    return merge($left, $right);
}

function merge($left, $right){
    $res=[];
    while(count($left)>0 && count($right)>0){
        if($left[0] > $right[0]){
            $res[]= $right[0];
            $right= array_slice($right, 1);
        }else{
            $res[]= $left[0];
            $left= array_slice($left, 1);
        }
    }

    while(count($left)>0){
        $res[]= $left[0];
        $left= array_slice($left, 1);
    }
    while(count($right)>0){
        $res[]= $right[0];
        $right= array_slice($right, 1);
    }
    return $res;
}

$newAr= mergeSort($test_array);
print_r($newAr);