<?php
// Insertion sort
$my_array=[8,4,1,5,9,2];

for($i=1; $i< count($my_array); $i++){
    $temp= $my_array[$i];
    $j=$i-1;
    while($j>=0 && $my_array[$j]>$temp){
        $my_array[$j+1]=$my_array[$j];
        $j--;
    }
    $my_array[$j+1]=$temp;
}