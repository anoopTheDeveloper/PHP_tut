<!-- PHP switch statement is used to execute one statement from multiple conditions.
 It works like PHP if-else-if statement. -->

 <?php
//  switch 

    $a = 10;
    switch($a){
        case 5:
            echo "number is 5";
            break;
        case 10:
            echo "number is 10";
            break;
        case 15:
            echo "number is 15";
            break;
        default:
            echo "greater than 15"; 
    }
 
 ?>