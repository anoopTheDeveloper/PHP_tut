<!-- PHP array is an ordered map (contains value on the basis of key). 
It is used to hold multiple values of similar type in a single variable. -->

<!-- advantages -->
<!-- less code 
easy to traverse
sorting -->

<!-- types
index array
associative array
multi dimentional array -->

<?php
// index array

    $arr = array("a" , "b" , "c" , "d" , "e");
    $a[0] = 1;
    $a[1] = 2;
    $a[2] = 3;
    $a[3] = 4;
    $a[4] = 5;

    for($i = 0; $i < count($arr) ; $i++){
        echo $arr[$i];
    }
    
    for($i = 0; $i < count($a) ; $i++){
        echo $a[$i];
    }

?>


<?php
// associative array

    $asso_arr = array("a" => "apple" , "b" => "ball" , "c" => "cat");
    $ass["d"] = "dog";
    $ass["e"] = "elephant";
    $ass["f"] = "flight";
    $ass["g"] = "god";

    foreach($asso_arr as $key => $value){
        echo $key . " = " . $value;
    }

    foreach($ass as $key => $value){
        echo $key . " = " . $value;
    }

?>


<?php
// multi-dimentional array

    $multi_arr = array(
        array(1 , "anoop" , "xyz"),
        array(2 , "vasu" , "abc"),
        array(3 , "shivam" , "xnxx")
    );

    echo "<br>";
    for($i =0 ; $i < count($multi_arr); $i++){
       for($j = 0; $j < count($multi_arr[$i]) ;$j++){
            echo $multi_arr[$i][$j] . " ";
       } 
       echo "<br>";
    }

?>