// find max sum sub array
// $arr = [1, -1, 3, 5, -1, 6, 8, 9];
// subArray = [3, 5, -1, 6, 8, 9]; => sum = 30;

$arr = [1, -1, 3, 5, -1, 6, 8, 9];
$ans = PHP_INT_MIN;
$temp = 0;
foreach($arr as $value) {
  $temp += $value;
  $ans = max($temp, $ans);
  $temp = max($temp, 0);
}
echo $ans;
 
