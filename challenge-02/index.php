<?php


function noIterate($strArr)
{
    $phrase = $strArr[0];
    $chars = $strArr[1];
    $maxLength = strlen($phrase);
    if (!subStrWithAllChars($chars, $phrase)) {
        return '';
    }
    $result = $phrase;
    for ($i = $maxLength - 1; $i > strlen($chars); $i--) {
        for ($j = 0; $j <= $maxLength - $i + 1; $j++) {
            $window = substr($phrase, $j, $i);
            if (subStrWithAllChars($chars, $window)) {
                $result = $window;
            }
        }

    }


    return $result;
}

function subStrWithAllChars($search, $phrase)
{
    $arraySearch = str_split($search);
    $arrayphrase = str_split($phrase);
    foreach ($arraySearch as $item) {
        $index = array_search($item, $arrayphrase);
        if ($index !== false) {
            unset($arrayphrase[$index]);
            $arrayphrase = array_values($arrayphrase);
        } else {
            return false;
        }
    }

    return true;
}
   
echo noIterate(["ahffaksfajeeubsne", "jefaa"]);  //aksfaje


?>
















