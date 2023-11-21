<?php
namespace practicals;

use InvalidArgumentException;

class Practical {
    /**
     * Function to print "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!\n";
    }

    public static function add($num1, $num2) {
        if(!is_numeric($num1) || !is_numeric($num2))
        {
            throw new \InvalidArgumentException("Arguments must be numeric");
        }
        return $num1 + $num2;
    }

    public static function generateFibonacciSequence($n) {
        if(!is_int($n))
        {
            throw new \InvalidArgumentException("Arguments must be Integer");
        }
        $fibonacciSequence = array();
        if ($n >= 1) {
            $fibonacciSequence[] = 0;
        }
        if ($n >= 2) {
            $fibonacciSequence[] = 1;
        }
        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }
        return $fibonacciSequence;
    }
}
?>
