<?php
    
    // // $cars= [
    // //     ["Volvo",22,18],
    // //     ["BMW",15,13],
    // //     ["Saab",5,2],
    // //     ["Land Rover",17,15]
    // //  ];
    //  $a[0][0] = 1;
    //  $a[0][1] = 2;
    //  $a[3][2] = 3;
    //  $a[3][3] = 4;
    //  $a[5][4] = 5;
    //  $a[5][5] = 6;
   
     $max = 0; // 
     $indexArray = 0; // luu vao mang da chieu 
     $maxLenngSubArray = 0;
     $arr = [0,1,3,3,-1,2,3,4,1,2,3,4,5,6];
 
    for($i = 0; $i < count($arr); $i++)
    {
        if($arr[$i] < $arr[$i+1])
        {
            $maxLenngSubArray++;
            $record[$indexArray][$i] = $arr[$i];
            
        }
        else
        {
            // tăng lên 1 
            $maxLenngSubArray++;
            if($maxLenngSubArray > $max)
            {
                $max = $maxLenngSubArray; // gắn biến max để tí mình tiện so sánh hơn xem mảng nào dài nhất 
            }
            // lúc này thi nó k lớn hơn nữa ròi chạy vào đây khi i = 2 thi value = 3 k nhỏ hơn thằng dằng sau nó chứng tỏ la phần tử  i + 1 se lớn hơn hoặc bằng thằng i thì lúc này ta sẽ gắn thằng giá trị thằng i vào mảng index rồi tăng index lên lưu mảng mới  
            $record[$indexArray][$i] = $arr[$i];
            $indexArray++; // tang len để sinh ra một array con khác 
            $maxLenngSubArray = 0; // lúc này ta lại gắn max leng bằng = 0 vi nó sẽ sang mảng mới ;
            
        }
    }

    foreach ($record as $value) 
     {
         if(count($value) == $max)
         {
            $arr = $value;
         }
     }
     // luc nay mang $arr cua chung ta chi con mang day so lớn nhất theo thu tu tang dan chỉ việc in ra thôi 
    foreach($arr as $num)
     {
         echo $num . " ";
     }

// Advanced == cach 2 == //

$a = [-1, 1, 0, 1, 2, 3, 4, 5, 7, 1];
//$a = [1,2,3,4,5,6];
$leng = count($a);
$a[$leng] = null;
$subLeng = 0;
$start = 0;
$tmpStart = $start;
$end = 0;

for( $i = 0; $i < $leng; $i++) {
	if( $a[$i] > $a[$i+1]  && $i - $tmpStart > $subLeng ) {
		 $start = $tmpStart;
		 $subLeng = $i - $end;
		 $end = $i;
		 $tmpStart = $i+1;
	}
		
}

for( $i = $start; $i <= $end; $i++ ) {
	echo $a[$i]. " ";
}
   
?>
