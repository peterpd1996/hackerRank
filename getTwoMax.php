<?php
function getMaxTwo()
{
    $arr = [2,1,6,4,7,1,0,10];
    $leng = count($arr);
    $max  = $arr[0];
    $max2 = 0; 
    for($i = 1 ; $i < $leng ; $i++ )
    {
        if($arr[$i] > $max)
        {
	    $max2 = $max;
            $max = $arr[$i];
           
        }
        else
        {
            if($arr[$i] > $max2)
            {
                $max2 = $arr[$i];
            }
	}
	/*
	 elseif($arr[$i] > $max2 && $arr[$i] < $max ){
	 	$max2 = $arr[$i];
	 }
	
	 */
    }
    return $max2;
}
echo getMaxTwo();
