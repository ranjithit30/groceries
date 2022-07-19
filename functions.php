<?php 
function price($name,$id){
	$details=array{
		'abc'=>100;
		'xyz'=>200;
	};
	foreach ($details as $n => $p) {
		if ($name==$n) {
			$price=$p;
		}
		return $price;
	}
?>