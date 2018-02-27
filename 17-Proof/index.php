<?php

$arry1 = array(9, 2, 6, 5, 1, 1, 0, 9, 8, 4, 9, 4, 2, 7, 9, 5, 5);
$arry2 = array(17, 16, 15, 14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1);

$arraysList = array($arry1, $arry2);

$masterArray = array();
foreach($arraysList as $array){
    foreach($array as $key => $value){
        $masterArray[$key][] = $value; } }

$total = 0;
foreach($masterArray as &$valueSet) {
    $total += array_product($valueSet); }

echo $total;

$sum = $total/17;

echo $sum;

if ($total>0) {
      if (($total % 17) == 0) {
        echo ("Geslaagd voor Zeventienproef");
      }
      else {
        echo ("Gezakt voor Zeventienproef");
      }
    }

?>
