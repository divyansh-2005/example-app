<?php
$number1 = 10;
$number2 = 20;

echo "Before swapping: ";
echo "Number 1 = " . $number1 . ", Number 2 = " . $number2 . "<br>";

// Swapping logic using a temporary variable
$temp = $number1;
$number1 = $number2;
$number2 = $temp;

echo "After swapping: ";
echo "Number 1 = " . $number1 . ", Number 2 = " . $number2;
?>

