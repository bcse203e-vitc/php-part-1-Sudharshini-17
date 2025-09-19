<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$new = [];
foreach ($array1 as $key => $arr) {
    array_unshift($arr, $array2[$key]);
    $new[] = $arr;
}
print_r($new);
?>

