 public function max(Request $request)
    {
        // check xem có thẻ ghép số đối xứng k 
        $result = $this->checkNumber((int)$request->number);
        if ($result == 0) {
            dd("số không thể là số đối xứng");
        }
        $number = 0;
        $middle = -1; // lưu số nào xuất hiện 1 lần hay k thì ghép ở giữa nếu có  
        
        // ghép nửa đầu của số 
        for ($i = 9; $i >= 0; $i--) {
            if ($result[$i] == 0) {
                continue;
            }
            $checkOddOrEven = $result[$i] / 2; // để kiểm tra xem số đó xuất hiện chẵn lần hay 1 lần 
            if ($checkOddOrEven < 1) {
                $middle = $i;
                continue;
            }
            for ($j = 0; $j < $checkOddOrEven; $j++) {
               $number = ($number * 10) + $i;
            }
        }

        if ($middle != -1) {
            $number = ($number * 10) + $middle;
        }


        // ghép nửa sau của số
        for ($i = 0; $i <= 9; $i++) {
            if ($result[$i] == 0) {
                continue;
            }
            $checkOddOrEven = $result[$i] / 2;
            if ($checkOddOrEven < 1) {
                continue;
            }   
            for ($j = 0; $j < $checkOddOrEven; $j++) {
                $number = ($number * 10) + $i;
            }
        }

        dd($number);
    }

    public function checkNumber(int $number) {
        for ($i = 0; $i <= 9 ; $i++) {
            $arr[] = 0;
        }
        $checkEven = 0;
        $checkOdd = 0;
        while ($number > 0) {
            $index = $number % 10;
            $arr[$index]++;
            $number = (int) ($number / 10);
        }

        // c1

//        foreach ($arr as $number) {
//            $checkEven += $number;
//            if ($number % 2 != 0 ) {
//                $checkOdd ++;
//            }
//        }
//        if ( $checkEven % 2 == 0 && $checkOdd == 1) {
//            return 1;
//        }
//
//        if ( $checkEven % 2 == 1 && $checkOdd == 0) {
//            return 1;
//        }
//        return 0;

        // c2
        foreach ($arr as $number)
        {
            if ($number == 0 ) {
                continue;
            }
            if ($number % 2 == 0 ) {
                $checkEven ++;
            } else {
                $checkOdd ++;
            }
        }
        if ( $checkEven > 1  && ($checkOdd == 1 || $checkOdd == 0) ) {
            return $arr;
        }
        return  0;
    }
