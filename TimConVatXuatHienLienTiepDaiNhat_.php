    $arrs = ["ga", "ga", "bo", "bo","bo", "chim", "chim", "chim", "chim", "ga", "ga"];
    $length = count($arrs);
    $arrs[$length] = null;
    $max = 1;
    $value = "";
    $tempMax = 1;
    for ($i = 0; $i < $length; $i++) {
        if ($arrs[$i] == $arrs[$i+1]) {
            $tempMax++;
        } else {
            if ($tempMax > $max) {
                $value = $arrs[$i];
                $max = $tempMax;
            }
            $tempMax = 1;
        }
    }
    dd($max, $value);
