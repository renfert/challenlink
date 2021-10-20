<?php

function findPoint($strArr) { 

    $arr1 = explode(", ", $strArr[0]);
    $arr2 = explode(", ", $strArr[1]);

    $result = [];

    foreach ($arr1 as $number) {
      if (in_array($number, $arr2)) {
        array_push($result,$number);
      }
    }
    return empty($result) ? "false" : implode(",", $result);
}

echo findPoint(['1, 3, 4, 7, 13', '1, 2, 4, 13, 15']);
?>