<?php

$arr = [1,8,1,10];
// output = [0,2,0,3];

$arrClone = $arr;
sort($arr);
$hash = [];
foreach($a as $index => $num) {
	if(!isset($hash[$num])) {
	    $hash[$num] = $index; 
	}
}

foreach($aClone as $index => $num) {
	if(isset($hash[$num])) {
		$aClone[$index] = $hash[$num];
	}
}
echo "<pre>";
var_dump($aClone);
echo "</pre>";
