<?php
// đếm một mảng con bắt đầu và kết thuc giống nhau mà dài nhất 
// [1,2,3,3,2] // mang con o day la [2,3,3,2] // số phần tử là 4 dài nhất thì return 4 
function solve($arr) {
    $leng = count($arr);
    $max = 0;
    for($i = 0 ;$i < $leng -1 ; $i++)
    {
      for($j = $leng - 1; $j > $i; $j --)
      {
          if($arr[$i] == $arr[$j])
          {
              $test = $j - $i + 1;
              if($test > $max)
              {
                  $max = $test;
              }
             break;
          }
      }
    }
    return $max;


}
$ar = [1,2,3,4,5,2,4,4];
echo solve($ar);
