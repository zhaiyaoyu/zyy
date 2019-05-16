<?php

function calFn($n,$m){
	$count = 0;
	for($i=$n;$i<=$m;$i++){
        
        $count += substr_count($i,1);
        
	}
	return $count;
}

print_r(calFn(1,13));
?>