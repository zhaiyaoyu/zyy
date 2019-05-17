<?php

function GetUglyNumber_Solution($index)
{
	if(!is_numeric($index))
	{
		return "这不是一个数字";
	}
     
	while($index%2==0)
	{
		$index = $index/2;
	}
     while($index%3==0)
	{
		$index = $index/3;
	}
	while($index%5==0)
	{
		$index = $index/5;
	}

	if($index==1)
	{
       echo "是个丑数";
	}else
	{
		echo "不是丑数";
	}
	
     
	
}
print_r(GetUglyNumber_Solution(6));

?>