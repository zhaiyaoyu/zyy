<?php

function Add($num1,$num2)
{
	$str = $num1.$num2;

	$arr[] = str_split($str);	

	$sum = '';

	$sum = array_sum($arr[0]);

	return $sum;
}

print_r(Add(5,5));

?>