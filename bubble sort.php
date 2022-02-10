<?php 
$arr=[9,3,6,2,8,5,7,5,3];

function swap($i,$j){
    global $arr;
    $temp= $arr[$i];
    $arr[$i]= $arr[$j];
    $arr[$j]= $temp;
}

function bubbleSort($n){
    global $arr;
    for($i=0; $i<$n-1; $i++){
        $swapped= false;
        for($j=0; $j<$n-$i-1; $j++){
            if($arr[$j] > $arr[$j+1]){
                $swapped= true;
                swap($j, $j+1);
            }
        }
        if(!$swapped){
            break;
        }
    }

}
bubbleSort(count($arr));
print_r($arr);
?>