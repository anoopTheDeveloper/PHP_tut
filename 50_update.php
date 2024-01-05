<?php
// update

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exampledemo";

    $con = mysqli_connect($servername , $username , $password , $dbname);

    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }

    $sql = "update example set lastname = 'moe' where id = 4";
    $result = mysqli_query($con , $sql);
    if($result){
        echo "record updated succesfully";
    }
    else{
        echo "error" . mysqli_error();
    }
    mysqli_close($con);

?>