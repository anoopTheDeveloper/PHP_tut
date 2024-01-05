<!-- Sometimes you need to change a variable from one data type into another, 
and sometimes you want a variable to have a specific data type. 
This can be done with casting.
(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL -->


<?php
// convertion

$a = 2;
$b = 3.4;
$c = "hello";
$d = true;
$e = NULL;


echo (string) $a;
echo (string) $b;
echo (string) $c;
echo (string) $d;
echo (string) $e;

echo "<br>";
echo (int) $a;
echo (int) $b;
echo (int) $c;
echo (int) $d;
echo (int) $e;

echo "<br>";
echo (float) $a;
echo (float) $b;
echo (float) $c;
echo (float) $d;
echo (float) $e;

echo "<br>";
echo (bool) $a;
echo (bool) $b;
echo (bool) $c;
echo (bool) $d;
echo (bool) $e;


?>