<?php

$arr = [5,8,2,4,3,6,9,10,12];
$num = 9;
function find($arr,$num)
{
   $son = [];
   foreach($arr as$k=>$v)
   {
   	  if($num==$v)
   	  {
   	  	echo $k;
   	  }
   }
   

}
print_r(find($arr,$num));

?>