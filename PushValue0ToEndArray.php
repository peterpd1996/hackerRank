// input $arr = [0, 1, 0, 2, 1, 3];
// output = [1, 2, 1, 3, 0, 0]; 

$arr = [0, 1, 0, 2, 1, 3];
$lengthArr = count($arr);
$temp = 0;
foreach($arr as $value) {
  if($value != 0) {
     $arr[$temp] = $value;
      $temp++;
    }
}
for($i = $temp; $i < $lengthArr; $i++) {
   $arr[$i] = 0;
}

var_dump($arr);
