<!-- PHP Break
PHP break statement breaks the execution of the current for, while, do-while, switch, and for-each loop.
If you use break inside inner loop, it breaks the execution of inner loop only. -->

<?php
// break

    for($i=0; $i <= 10; $i++){
        if($i == 5){
            break;
        }
        echo $i;
    }

?>

<?php
// continue

    for($i=0; $i <= 10; $i++){
        if($i == 5){
            continue;
        }
        echo $i;
    }

?>