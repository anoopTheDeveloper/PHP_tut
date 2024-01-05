<!-- PHP data types are used to hold different types of data or values.
PHP supports 8 primitive data types that can be categorized further in 3 types:

Scalar Types (predefined)
Compound Types (user-defined)
Special Types -->


<!-- Scalar Type -->

<!-- boolean
integer
float
string -->

<!-- Compound Type -->

<!-- array
object -->

<!-- Special Type -->

<!-- resource
NULL -->


<?php
// boolean
     if(true){
        echo "condition is true";
     }
     else{
        echo "condition is false";
     }

?>

<?php
// Integer

   $num = 10;
   $Num = 30;
   $sum = $num+$Num;
   echo $sum;

?>

<?php
// Float

    $num = 10.4;
    echo $num;

?>

<?php
// string
    $name = "anoop";
    echo $name;

?>

<?php
// array

    $arr = array(1,2,3,4,5);
    echo $arr[0];
    echo $arr[1];
    echo $arr[2];
    echo $arr[3];

?>

<?php
// object

    class abc {

        public function printName($fname , $lname){
            echo $fname. " " . $lname;
        }
    }

    $obj = new abc;
    $obj -> printName("anoop" , "dhiman");

?>