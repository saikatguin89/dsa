<?php
// Quick sort
$arr=[7,6,10,5,9,2,1,15,7];

function quick_sort($my_array)
 {
	$loe = $gt = array();
	if(count($my_array) < 2)
	{
		return $my_array;
	}
	$pivot_key = key($my_array);
	$pivot = array_shift($my_array);
	foreach($my_array as $val)
	{
		if($val <= $pivot)
		{
			$loe[] = $val;
		}elseif ($val > $pivot)
		{
			$gt[] = $val;
		}
	}
	return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
}

$my_array = quick_sort($arr);
echo 'Sorted Array : '.implode(',',$my_array);
?>
