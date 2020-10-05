C1:
  function longestPalindrome($string) {
        $length = strlen($string);
        $start = 0;
        $end = 0;
        for($i = 0;$i < $length; $i++) {
            $len1 = $this->expland($i, $i+1, $string); // chan
            $len2 = $this->expland($i,$i,$string); // le
            $len = $len1['length'] > $len2['length'] ? $len1 : $len2;
            if($len['length'] > $end - $start)  {
                $start = $len['l'];
                $end = $len['r'];
            }
        }
        $s = '';
        for ($i = $start ; $i <= $end ; $i++) {
            $s .= $string[$i];
        }
        return $s;
    }
    
    function expland($l, $r, $string) {
       $length = strlen($string);
        while ($l >= 0 && $r < $length && $string[$l] == $string[$r]) {
            $l--;
            $r++;
        }
        $l++;
        $r--;
        return  ['l' => $l, 'r' => $r, 'length' => $r - $l + 1];
    }

C2:
function getLongest($string) {
    $length = strlen($string);
    $start = 0;
    $end = 0;
    for($i = 0;$i < $length; $i++) {
        $len1 = expland($i, $i+1, $string); // chan
        $len2 = expland($i,$i,$string); // le
        $len = max($len1, $len2);
        echo "i = ".$i . " len1 = ".$len1 . " len2 = ".$len2 . "\n";
        if($len > $end - $start)  {
            $start = $i - round(($len - 1)/2,0, PHP_ROUND_HALF_DOWN);
            $end = $i + round($len/2,0, PHP_ROUND_HALF_DOWN);
        }
    }
    $s = '';
    for ($i = $start ; $i <= $end ; $i++) {
        $s .= $string[$i];
    }
    return $s;
}


function expland($l, $r, $string) {
    $length = strlen($string);
    while ($l >= 0 && $r < $length && $string[$l] == $string[$r]) {
        $l--;
        $r++;
    }
    $l++;
    $r--;
	return  $r - $l + 1;
}
 echo getLongest("abxba");
