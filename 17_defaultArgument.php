<!-- PHP allows you to define C++ style default argument values. 
In such case, if you don't pass any value to the function, it will use default argument value. -->

<?php
// default argument

function abc($name = "Ram"){
    return "Hello " . $name;
}
echo abc();
echo abc("anoop");

?>