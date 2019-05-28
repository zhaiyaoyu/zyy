<?php

$target = 2; 

$array=[[1,9,8,2],[2,4,3,12],[4,7,6,13],[6,5,11,15]];



function Find($target,$array)
{
	foreach($array as$k=>$v){
		for($i=0;$i<count($array);$i++){
			array_multisort($array[$i],SORT_ASC);	
				
		}
	}
	

			return $array;

	// array_multisort ($array [ 0 ],SORT_ASC,
 //                 $array [ 1 ],SORT_ASC,$array [ 2 ],SORT_ASC ,$array [ 3 ],SORT_ASC);
	
}
print_r(Find($target,$array));
?>