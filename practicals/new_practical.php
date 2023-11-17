<?php
namespace practicals;

class new_practical{
    public static function printHello(){
        echo "Hello World\n";
    }

    public static function mul($num1,$num2){
        return $num1*$num2;
    }
    public static function generateFibonacciSequence($n){
        $fibo= [0,1];
        for($i = 2;$i < $n;$i++){
            $fibo[$i] = $fibo[$i-1] + $fibo[$i-2];
        }
        return $fibo;
    }
}
echo "running";
?>