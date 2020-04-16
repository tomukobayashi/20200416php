<?php
	function get_sum_and_diff($int1,$int2){
		$sum=$int1+$int2;
		$differense=$int1-$int2;
		return array($sum,$differense);
	}

	$int1 = 8;
	$int2 = 3;

	list($sum,$differense)=get_sum_and_diff($int1,$int2);
	echo $sum.'<br>';
	echo $differense;
?>



