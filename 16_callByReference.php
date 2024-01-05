<!-- In case of PHP call by reference, actual value is modified if it is modified inside the function. 
In such case, you need to use & (ampersand) symbol with formal arguments. 
The & represents reference of the variable. -->

<?php
// call by ref.

function abc(&$a){
    return $a+19;
}

$a = 10;
echo abc($a);

?>