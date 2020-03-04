<?php
// tim chuoi stringNeed trong chuoi string in ra vi tri xuat hien la so lan xuat hien
$string = "nguyen tung duong tunag";
$stringNeed = "tung"; 
$timeAppears = "";
$dem = 0;
$lengString = strlen($string);
$lengStringNeed = strlen($stringNeed);

for($i = 0; $i< $lengString;$i++)
{
	$count = 0;
	while($count<$lengStringNeed && $string[$i+$count] == $stringNeed[$count])
		$count++;
	if($count == $lengStringNeed)
	{
		$vt = $i+1;
		$timeAppears.=$vt." ";
		$dem++;
	}
		
		
}
if($dem == 0)
{
	echo "chuoi ".$stringNeed." khong tim thay";
}
else
{
	echo "chuoi '".$stringNeed."' xuat hien ".$dem." tai vi tri ".$timeAppears;
}
