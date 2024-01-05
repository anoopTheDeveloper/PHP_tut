<!-- variable length argument function
PHP supports variable length argument function. 
It means you can pass 0, 1 or n number of arguments in function. 
To do so, you need to use 3 ellipses (dots) before the argument name. -->

<?php
// variable lenght argument 

    function abc(...$number){
        $sum = 0;

        foreach($number as $num){
            $sum += $num;
        }
        return $sum;
    }

    echo abc(1,2,3,4,5);

?>