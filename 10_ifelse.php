<!-- PHP if else statement is used to test condition. There are various ways to use if statement in PHP -->
<!-- if
if-else
if-else-if
nested if -->


<?php
// if

    $a = 10;
    if($a > 5){
        echo 'greater than 5';
    }

?>

<?php
// if else

    $a = 4;
    if($a > 10){
        echo "greater than 10";
    }
    else{
        echo "not greater than 10";
    }

?>

<?php
// if elseif 

    $a = 19;
    if($a >= 1 && $a < 5){
        echo "less than 5";
    }
    elseif($a >= 5 && $a < 10){
        echo "less tha 5 and graeter than 10";
    }
    elseif($a >= 10 && $a < 15){
        echo "greater than 10 and less than 15";
    }
    else {
        echo "greater than 15";
    }

?>

<?php
// nested if

    $a = 10;
    if($a > 5){
        if($a >= 10){
            echo "graeter tha 5 and less than or equal to 10";
        }
        else {
            echo "greater than 10";
        }
    }

?>