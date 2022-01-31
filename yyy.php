<?php
$str = 'aaabbcff';

$arr = str_split($str);
$arr2 = [];
//print_r($arr);
//echo $arr;
foreach ($arr as $k) {
    $arr2[$k] += 1;
}

print_r($arr2);
//var_dump($arr2);*/
