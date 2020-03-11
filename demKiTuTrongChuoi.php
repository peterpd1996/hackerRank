<?php
<?php
// input "aabaxac" output = a4b1
$string = "aarraxx";
$output = "";
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
          
            $arr[$string[$i]] = 1;
        }

}
foreach($arr as $key => $value)
{
	$output.=$key.$value;
}
echo $output;	
