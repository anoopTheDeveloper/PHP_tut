<!-- PHP Call By Value
PHP allows you to call function by value and reference both.
In case of PHP call by value, actual value is not modified if it is modified inside the function. -->

<?php
// call by value

    function abc($a){
        return $a +10;
    }

    echo abc(19);
?>