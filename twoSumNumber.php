<?php
	$arr = [1,2,3,7,10];
	$arrCheck = [$arr[0] => 0];
    $taget = 9; //putput = 1 3
	// reutrn index of two number sum = $taget 
	
	$leng = count($arr);

	for($i = 1; $i < $leng; $i++)
	{
	
		$number = $taget - $arr[$i]; // 8
		if(array_key_exists($number,$arrCheck)){
			echo "ok ". $arrCheck[$number] ." ". $i;
			break;
		}
		else
		{
			$arrCheck[$arr[$i]] = $i;
		}
		
	}
