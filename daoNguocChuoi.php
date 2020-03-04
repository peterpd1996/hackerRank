<?php
	$string = "duonghaha";
			   				
	$leng = strlen($string);
	$left = 0;
	$right = $leng-1;
	while($left < $right)
	{
		$tmp = $string[$right];
		$string[$right] = $string[$left];
		$string[$left]=$tmp;
		$left++;
		$right--;
		
	}
	echo $string;
