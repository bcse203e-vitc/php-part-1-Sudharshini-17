<?php
$original = array(1, 2, 3, 4, 5);
echo "Original array: ";
print_r($original);

array_splice($original, 3, 0, '$'); 
echo "After inserting: ";
print_r($original);
?>

