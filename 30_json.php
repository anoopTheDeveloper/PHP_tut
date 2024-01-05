<?php
// json php , it stand forjavascript object  notation
// json_encode


    $arr = array("a" => "apple" , "b" => "ball" , "c" => "cat");
    $json_obj = json_encode($arr);
    echo $json_obj ."<br>";

    $age = array(22,23,24,25,26);
    echo json_encode($age);

?>


<?php
//  json_decode

$json_format = '{"a" : 32 , "b" : 34 , "c" : 55}';
echo "<br>";
var_dump(json_decode($json_format));
echo "<br>";

//  to convert in associative array

var_dump(json_decode($json_format , true));
?>


<?php
// accessing the json

$jsondecode = json_decode($json_format);
echo $jsondecode -> a . "<br>";
echo $jsondecode -> b . "<br>";
echo $jsondecode -> c . "<br>";

?>

<?php
// accessing with json array

    $jsonarr = json_decode($json_format , true);
    echo $jsonarr["a"] . "<br>";
    echo $jsonarr["b"] . "<br>";
    echo $jsonarr["c"] . "<br>";

?>

<?php
//  accessing with loop

    $jsonobj = json_decode($json_format);
    foreach($jsonobj as $key => $value){
        echo  $key . " => " . $value;
    }

?>

<?php
// accessing associaive array

    $jsonobj = json_decode($json_format , true);
    foreach($jsonobj as $key => $value){
        echo $key . " => " . $value;
    }

?>