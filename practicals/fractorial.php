<?php
function factorial($n) {
    if ($n == 0) {
        return 1; // Base case: 0! is 1
    } else {
        return $n * factorial($n - 1); // Recursive case: n! = n * (n-1)!
    }
}

$number = 5; // Change this to the number for which you want to calculate the factorial
$result = factorial($number);

echo "The factorial of $number is $result";
?>

