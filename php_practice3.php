<?php

// 課題１
function double ($num) {
    $num *= 2;
    return $num;
}

echo double(4);
echo "\n";


// 課題２
function add ($a, $b) {
    $added_num = $a + $b;
    return $added_num;
}

echo add(3, 7);
echo "\n";


// 課題３
function Array_Calc ($arr) {
    $num = 1;
    foreach($arr as $item) {
        $num *= $item;
    }
    return $num;
}

$test_arr = array(3,5,7,8);
echo Array_Calc($test_arr);
echo "\n";


// 課題４
 function max_array($arr){
    array_multisort($arr, SORT_DESC);
    return $max_number = $arr[0];
 }
 
 echo max_array(array(100,5,3,6));
 echo "\n";
 
 
// 課題５
$text = "<p>tech boost</p>";
echo strip_tags($text . "\n");

$arr = array("orange", "apple");
array_push($arr, "grape");
print_r($arr);

$arr_int = array(1,2,3);
$arr_str = array("apple", "orange", "grape");
$arr_merged = array_merge($arr_int, $arr_str);
print_r($arr_merged);

echo time() . "\n";
$lastday = mktime(0, 0, 0, 3, 0, 2000);
echo strftime("Last day in Feb 2000 is: %d", $lastday) . "\n";
echo date("M-d-Y", mktime(0, 0, 0, 5, 1, 2021)) . "\n";
?>