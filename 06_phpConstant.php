<!-- PHP constants are name or identifier that can't be changed during the execution of the script except for magic constants, which are not really constants. PHP constants can be defined by 2 ways:

Using define() function
Using const keyword -->


<?php

// define(name, value, case-insensitive)  
// name: It specifies the constant name.
// value: It specifies the constant value.
// case-insensitive: Specifies whether a constant is case-insensitive. Default value is false. It means it is case sensitive by default.

    define("name" , "Anoop");
    echo name;

    define("HELLO" , "by anoop" , true);
    echo HELLO;
    echo hello;
     /// case sensitive is no longer supported

?>


<?php

// PHP introduced a keyword const to create a constant.
//  The const keyword defines constants at compile time.
//  It is a language construct, not a function. The constant defined using const keyword are case-sensitive.


    const msg = "hello by anoop";
    echo msg;

    
?>

<!-- Constant() function
There is another way to print the value of constants using constant() function instead of using the echo statement. -->

<?php

    const newName = "anoop dhiman";
    echo constant("newName");

?>