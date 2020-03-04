<?php
    $a= [1,2,3,4,5];
    $b = [2,3,4,5];
    $check = [];
    $diff = [];
    $n1 = count($a);
    $n2 = count($b);
    for($i = 0; $i < $n1; $i++)
    {
        $check[$a[$i]] = true; // mac dinh minh se gan cho cai mang $check voi ket la gia tri cua mang $a;
    }
    for($i = 0;$i < $n2; $i++)
    {
        if($check[$b[$i]]) // nghia la no da ton tai roi minh se duyet tu dau cua mang b
        {
            unset($check[$b[$i]]); // co roi thi xoa mang di
        }
        else
        {
            $check[$b[$i]] = true; // chua co thi ok
        }
    }
   
    foreach($check as $key => $diffNum)
    {
       array_push($diff,$key);
    }
    // mang cuoi cung con lai
    var_dump($diff);
?>
