<?php
$arr = [2,3,4]; // output [12,8,6] vi tri hien tai bang cac vi tri con lai nhân với nhau 
$n = count($arr);
$tich = 1;
for($i = 0 ; $i < $n; $i ++)
{
	$tich*=$arr[$i];
}

for($i = 0 ; $i < $n; $i ++)
{
	$arr[$i] = $tich/$arr[$i];
}
var_dump($arr);
