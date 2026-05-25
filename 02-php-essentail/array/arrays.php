<?php

$my_arr = array("apple", "orange", "banana", "kiwi");
echo "<pre>";
var_dump($my_arr);
echo "</pre>";

for ($i = 0; $i < count($my_arr); $i++) {
    echo ($i . " : " . $my_arr[$i]);
    echo "<br>";
}

foreach ($my_arr as $key => $value) {
    echo ($key . " : " . $value);
    echo "<br>";
}

$categories = ["Programming", "Business", "Art & Drawing", "Self Imporvement", "History"];
echo "<pre>";
var_dump($categories);
echo "</pre>";

$search = in_array("Programming", $categories);
var_dump($search);
echo "<br>";
var_dump("array search " . " => " .  array_search("Programming", $categories)); // string(18) "array search => 0" pointing with index
echo "<br>";
// array_slice returns an array, avoid concatenating it to a string. Dump message and slice separately.
var_dump("array slice => ", array_slice($categories, 0, 2)); //string(15) "array slice => " array(2) { [0]=> string(11) "Programming" [1]=> string(8) "Business" }
echo "<br>";
var_dump(count($categories));

// Array ထဲက Data ကို ပြင်ဆင်ခြင်း (Updating)
$categories[2] = "Art and Drawing";
echo "<pre>";
var_dump($categories);
echo "</pre>";

// unset() သုံးပြီး Array element ကို ဖျက်ခြင်း (မှတ်ချက် - Index key ပါ ပျောက်သွားမည်)
unset($categories[2]);
echo "<pre>";
var_dump($categories);
echo "</pre>";

// Array အသစ်တစ်ခု ထပ်ပေါင်းထည့်ခြင်း (Pushing)
$categories[] = "Nature Books";
echo "<pre>";
var_dump($categories);
echo "</pre>";
// array(5) {
//   [0]=>
//   string(11) "Programming"
//   [1]=>
//   string(8) "Business"
//   [3]=>
//   string(16) "Self Imporvement"
//   [4]=>
//   string(7) "History"
//   [99]=>
//   string(12) "Nature Books"
// }
echo $categories[5];
echo "<br>";

$names = ["Emily Johnson", "Micheal Smith", "Sarah Williams", "James Brown", "Jennifer Davis", "Wiallam Miller"];
$num = count($names);
$choice = rand(0, $num - 1);
echo $choice;
echo "<br>";
echo ($names[$choice]);
echo "<br>";

// array_unique is created the new array
$names_dul = ["Emily Johnson", "Micheal Smith", "Sarah Williams", "James Brown", "Jennifer Davis", "Wiallam Miller", "Wiallam Miller", "Wiallam Miller"];
$uni_arr = array_unique($names_dul);
echo "<pre>";
var_dump($uni_arr);
echo "</pre>";

// sort()
sort($uni_arr);
echo "<pre>";
var_dump($uni_arr);
echo "</pre>";

// rsort()
rsort($uni_arr);
echo "<pre>";
var_dump($uni_arr);
echo "</pre>";

foreach ($uni_arr as $name) {
    echo $name;
    echo "<br>";
};

// continue and break
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var_dump("Minimum value: ", min($number));
echo "<br>";
var_dump("Maximum value: ", max($number));
echo "<br>";
var_dump("Total Sum: ", array_sum($number));
echo "<br>";
var_dump("Count : ", count($number));
echo "<br>";
$number2 = [10, 11, 12, 13, 14, 15, 16, 17, 18];
$out = array_merge($number, $number2);
echo "<pre>";
var_dump($out);
echo "</pre>";

foreach ($number as $num) {

    if ($num === 1) continue;

    if ($num === 7) break;
    echo $num;
    echo "<br>";
}
