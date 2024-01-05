<!-- PHP Loop
PHP for loop can be used to traverse set of code for the specified number of times.

It should be used if the number of iterations is known otherwise use while loop.
This means for loop is used when you already know how many times you want to execute a block of code. -->


<?php
// for loop

    for($a = 0 ; $a <= 10 ; $a++){
        echo $a;
    }

?>

<?php
// while loop

    $a = 0;
    while($a <= 10){
        echo $a;
        $a++;
    }

?>

<?php
// do while loop

    $a = 0;
    do {
        echo $a;
        $a++;
    }
    while($a <= 10);

?>


<?php
// foreach loop

    $arr = array(1,2,3,4,5,6);
    foreach($arr as $ar){
        echo $ar;
    }

?>