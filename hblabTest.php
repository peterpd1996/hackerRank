<?php
// tinh lại giá trị của từng phần tử trong mảng, giá trị mới sẽ bằng tích các phần tử còn lại
// vd [1,2,3] => mang mới [6,3,2], phải cover cả trường hợp trong mảng có một phần tử bằng 0 nữa
$a = [1,0,4,6,3];
$check = null;
$total = 1;
foreach($a as $key => $value)
{
	
	if($value == 0)
	{
		$check = $key;
	}
	else
	{
		$total*= $value;
	}
}

foreach($a as $key => $value)
{
	if($check == null)
	{
		$a[$key] = $total/$value;
	}
	elseif($check != $key)
	{
		$a[$key] = 0;
	}
	else
	{
		$a[$key] = $total;
	}
}
var_dump($a);
