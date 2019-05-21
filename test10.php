<?php

function FindNumsAppearOnce($array)
{
	$count = '';
	$str = '';
	$count = array_count_values($array);
	foreach($count as$k=>$v){		
		if($v==1){
          $str .= $k;
		}
	}
	$arr = [];
	$arr = str_split($str);
    var_dump($arr);
}
print_r(FindNumsAppearOnce([2,4,3,6,3,2,5,5,8]));

?>