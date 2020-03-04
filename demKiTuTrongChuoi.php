<?php
// input "aabaxac" output = a4b1
$string = "aarrafxl";
$leng = strlen($string);
$arr = [$string[0] => 1];
for($i = 1;$i < $leng ; $i++)
{
	if(array_key_exists($string[$i],$arr))
	{
	    $arr[$string[$i]]+=1;
	}
	else
	{
	    $item = [$string[$i] => 1];
	    $arr = array_merge($arr,$item);
	}
	
}
var_dump($arr);
