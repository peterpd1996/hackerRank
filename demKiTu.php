// input aaabcd output a3b1c1d1
<?php
$string = "aaabbvvcccaa";
$output = "";
$leng = strlen($string);
$string[$leng] = null;// de chan phan tu cuoi cung do bi ra ngoai
$dem = 1;
for($i = 0 ;$i < $leng; $i++)
{
	if($string[$i] == $string[$i+1])
	{
		$dem++;
	}
	else
	{
		$output.=$string[$i].$dem;
		$dem = 1;
	}
	
}
echo $output;
