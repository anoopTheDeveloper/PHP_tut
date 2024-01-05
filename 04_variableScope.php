<!-- The scope of a variable is defined as its range in the program under which it can be accessed. In other words, "The scope of a variable is the portion of the program within which it is defined and can be accessed."

PHP has three types of variable scopes:

Local variable
Global variable
Static variable -->

<!-- local variable -->

<?php
    function abc() {
        $num = 10;
        $Num = 30;
        echo $num+$Num;
    }
    // echo $num;  // can't accessible
    
    // num & Num are local variable for their scope
?>

<!-- global scope -->
<?php
    
    $name = "Chalo chlte hain";
    function xyz(){
        echo $name;  // global variable access everywhere
    }
    // echo $abc;
    xyz();
?>

<!-- static variable -->
<?php
    
    function static_variable(){
        static $num1 = 6;
        $num2 = 7;

        $num1++;
        $num2++;

        echo $num1;
        echo $num2;

    }

    static_variable();
    static_variable();
    static_variable();
       
    // static variable store the previous value execute with new value 
?>


