<?php
// Function to calculate the factorial
function factorial($n) {
    if($n == 0 || $n == 1){
        return 1;
    } else{
        return $n * factorial($n - 1);
    }
}

// Define the number for which you want to find the factorial
//      $number = 5;
//OR Prompt the user for input
    echo "Enter a number to calculate its factorial: ";
    $number = intval(trim(fgets(STDIN))); // Read the number from the user
    //Check if the input is a non-negative integer
    if($number < 0){
        echo "Factorial is undefined for negative numbers.\n";
    }
    else{
        $result = factorial($number);
// Display the factorial
echo "Factorial of $number id: $result\n";
    }
?>

