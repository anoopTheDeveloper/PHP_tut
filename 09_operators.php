<!-- PHP Operator is a symbol i.e used to perform operations on operands. 
In simple words, operators are used to perform operations on variables or values. -->


<!-- Arithmetic Operators
Assignment Operators
Bitwise Operators
Comparison Operators
Incrementing/Decrementing Operators
Logical Operators
Type Operators -->


<?php
// arithmatic operator
   
     $a = 10;
     $b = 30;

     echo $a+$b;
     echo $a-$b;
     echo $a%$b;
     echo $a/$b;
     echo $a*$b;


?>

<?php
// assignment operators

    $a = 10;
    echo $a;
    $a += 10;
    $a -= 10;
    $a %= 10;
    $a *= 10;
    $a /= 10;

?>

<?php
// comparison operator

    $a = 10;
    $b = 29;
    echo $a == $b;
    echo $a != $b;
    echo $a === $b;
    echo $a !== $b;
    echo $a > $b;
    echo $a < $b;
    echo $a >= $b;
    echo $a <= $b;


?>

<?php
// bitwise operator

    $a = 2;
    $b = 3;;

    echo ~$a;
    echo $a ^ $b;
    echo $a & $b;
    echo $a | $b;
    echo $a >> 2;
    echo $b << 1;

?>


<?php
// increment / decrement operator

    $a = 10;
    echo $a++;
    echo $a--;

?>

<?php
// logical operator 

    $a = 10;
    if($a >= 5 && $a >= 10){
        echo "greater than 5";
    }
    else{
        echo "less than 5";
    }

    if($a > 5 || $a >189){
        echo "true";
    }
    else{
        echo "false";
    }

?>