<?php 
// selection sort: search for the lowest value and put it into the front
$a=[10,3,6,1,8,2,6,3];

for($i=0; $i<count($a)-1; $i++){
    $temp= $a[$i];
    $selected=$i;

    for($j=$i+1; $j<count($a); $j++){
        if($temp>$a[$j]){
            $temp= $a[$j];
            $selected=$j;
        }
    }
    $a[$selected]= $a[$i];
    $a[$i]= $temp;
    
}
print_r($a);

