<!-- In PHP, a variable is declared using a $ sign followed by the variable name. Here, some important points to know about variables:

As PHP is a loosely typed language, so we do not need to declare the data types of the variables. It automatically analyzes the values and makes conversions to its correct datatype.
After declaring a variable, it can be reused throughout the code.
Assignment Operator (=) is used to assign the value to a variable.
Syntax of declaring a variable in PHP is given below:

$variablename=value;  
Rules for declaring PHP variable:

A variable must start with a dollar ($) sign, followed by the variable name.
It can only contain alpha-numeric character and underscore (A-z, 0-9, _).
A variable name must start with a letter or underscore (_) character.
A PHP variable name cannot contain spaces.
One thing to be kept in mind that the variable name cannot start with a number or special symbols.
PHP variables are case-sensitive, so $name and $NAME both are treated as different variable. -->


<?php
    $msg = "hello world";
    echo $msg;
?>

<!-- sum of two variable -->
<?php
    $num1 = 10;
    $num2 = 20;
    echo $num1+$num2;
?>

<!-- case sensitive -->
<?php
    $num = 10;
    $Num = 20;
    echo $num+$Num;
?>




