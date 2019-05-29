<?php

$arr_A=[1,3,6,9]; 
$arr_B=[2,4,5,8,20];
function Combine($arr_A,$arr_B)
{
	

	$res = [];

	for($i=0;$i<count($arr_A);$i++){

		$res[$i] = $arr_A[$i];	
        
   }
	
	for($i=0;$i<count($arr_B);$i++){

		$res[$i] = $arr_B[$i];	
        
   }
var_dump($res);
}
print_r(Combine($arr_A,$arr_B));

?>