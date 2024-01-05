<!-- PHP Functions
PHP function is a piece of code that can be reused many times. 
It can take input as argument list and return value. 
There are thousands of built-in functions in PHP. -->

<!-- Advantage
Code Reusability
Less Code
Easy to understand -->

<?php
// default function

    function sumOfTwoNumber(){
        $a = 10;
        $b = 19;
        return $a + $b;
    }
    echo sumOfTwoNumber();

?>

<?php
// parametrized function


    function sumOfNumber($a , $b){
        return $a + $b;
    }
    echo sumOfNumber(4 , 5);

?>