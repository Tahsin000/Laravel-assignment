<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

$numbers = [$num1, $num2, $num3];

$largest = $numbers[0];

foreach ($numbers as $number) {
    if ($number > $largest) {
        $largest = $number;
    }
}

echo "The largest number among $num1, $num2, and $num3 is: $largest";
?>
