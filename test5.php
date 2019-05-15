<?php

$arr = [1,2,3,4,5,6];

$odd = $even = [];

foreach($arr as$k =>$v){
	if($v%2==1){
		$odd[] = $v;
	}else{
		$even[] = $v;
	}
}
var_dump(array_merge($odd,$even));

?>