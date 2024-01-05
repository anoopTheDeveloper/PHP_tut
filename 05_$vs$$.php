<!-- The $var (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc.

The $$var (double dollar) is a reference variable that stores the value of the $variable inside it. -->

<?php

    $name = "abc";
    $$name = "xyz";

    echo $name ."  ";
    echo $$name . "  ";
    echo $abc;
    


    $name="Cat";  
    ${$name}="Dog";  
    ${${$name}}="Monkey";  
    echo $name. "<br>";  
    echo ${$name}. "<br>";  
    echo $Cat. "<br>";  
    echo ${${$name}}. "<br>";  
    echo $Dog. "<br>";  

?>